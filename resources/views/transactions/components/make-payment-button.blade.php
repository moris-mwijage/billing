@php
    $invoice = \App\Models\Invoice::find($this->invoiceId);
@endphp
@if (getLogInUser()->hasRole('client') && $invoice->status_label != 'Paid')
    <a href="{{ route('clients.payments.show', $this->invoiceId) }}"
        class="btn btn-primary">{{ __('messages.quote.make_payment') }}
    </a>
@endif
