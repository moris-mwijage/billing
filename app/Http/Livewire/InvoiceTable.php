<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class InvoiceTable extends LivewireTableComponent
{
    protected $model = Invoice::class;

    protected string $tableName = 'invoices';

    public bool $showButtonOnHeader = true;

    public string $buttonComponent = 'invoices.components.add-button';

    public $status = null;

    public function mount(): void
    {
        $this->status = request()->input('status', null);
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('created_at', 'desc');
        $this->setQueryStringStatus(false);

        $this->setThAttributes(function (Column $column) {
            if ($column->isField('final_amount')) {
                return [
                    'class' => 'd-flex justify-content-end',
                ];
            }
            if ($column->isField('amount')) {
                return [
                    'class' => 'text-end',
                ];
            }

            return [
                'class' => 'text-center',
            ];
        });

        $this->setTdAttributes(function (Column $column, $row, $columnIndex, $rowIndex) {
            if (in_array($column->getField(), ['status', 'id'])) {
                return [
                    'class' => 'text-center',
                ];
            }
            if (in_array($column->getField(), ['final_amount', 'amount'])) {
                return [
                    'class' => 'text-end',
                ];
            }

            return [];
        });
    }

    public function columns(): array
    {
        return [
            Column::make(__('messages.invoice.client'), 'client.user.first_name')
                ->sortable(function (Builder $query, $direction) {
                    return $query->orderBy(Client::select('first_name')->whereColumn('users.id', 'user_id'), $direction);
                })
                ->searchable()
                ->view('invoices.components.client-name'),
            Column::make('invoice_id', 'invoice_id')
                ->sortable()
                ->searchable()->hideIf(1),
            Column::make('Last Name', 'client.user.last_name')
                ->sortable()
                ->searchable()->hideIf(1),
            Column::make(__('messages.invoice.invoice_date'), 'invoice_date')
                ->sortable()
                ->searchable()
                ->format(function ($value, $row, Column $column) {
                    return view('invoices.components.invoice-due-date')
                        ->withValue([
                            'invoice-date' => $row->invoice_date,
                        ]);
                }),
            Column::make(__('messages.invoice.due_date'), 'due_date')
                ->sortable()
                ->searchable()
                ->format(function ($value, $row, Column $column) {
                    return view('invoices.components.invoice-due-date')
                        ->withValue([
                            'due-date' => $row->due_date,
                        ]);
                }),
            Column::make(__('messages.invoice.amount'), 'final_amount')
                ->sortable()
                ->searchable()
                ->format(function ($value, $row, Column $column) {
                    return getInvoiceCurrencyAmount($row->final_amount, $row->currency_id, 'true', $row->tenant_id);
                }),
            Column::make(__('Previous Meter Count'), 'previous_meter_count')
            ->sortable()
            ->searchable()
            ->format(function ($value, $row, Column $column) {
                return $value; // Adjust the format as needed
            }),
            Column::make(__('Current Meter Count'), 'current_meter_count')
            ->sortable()
            ->searchable()
            ->format(function ($value, $row, Column $column) {
                return $value; // Adjust the format as needed
            }),
           
            Column::make(__('messages.invoice.transactions'), 'amount')
                ->searchable()
                ->view('invoices.components.transaction'),
            Column::make(__('messages.common.status'), 'status')
                ->searchable()
                ->view('invoices.components.transaction-status'),
            Column::make(__('messages.common.action'), 'id')
                ->view('livewire.invoice-action-button'),

        ];
    }

    public function builder(): Builder
    {
        $query = Invoice::with(['client.user', 'payments'])->select('invoices.*')
            ->when($this->status, function ($query, $status) {
                return $query->where('invoices.status', $status);
            })
            ->when($this->getAppliedFilterWithValue('invoices.status'), function ($query, $type) {
                return $query->where('invoices.status', $type);
            });

        $user = Auth::user();
        if ($user->hasRole(\App\Models\Role::ROLE_CLIENT)) {
            $query->where('invoices.status', '!=', Invoice::DRAFT);
        }

        return $query;
    }

    public function filters(): array
    {
        $status = Invoice::STATUS_ARR;
        unset($status[Invoice::STATUS_ALL]);

        return [
            SelectFilter::make(__('messages.common.status').':')
                ->options($status)
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('invoices.status', '=', $value);
                }),
            SelectFilter::make(__('messages.invoice.recurring').' '.__('messages.common.status').':')
                ->options(Invoice::RECURRING_STATUS_ARR)
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('invoices.recurring_status', $value);
                }),
        ];
    }

    public function resetPageTable()
    {
        $this->customResetPage('invoicesPage');
    }
}
