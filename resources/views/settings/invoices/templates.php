<script id="defaultTemplate" type="text/x-jsrender">
    <?php
    $styleCss = 'style';
    ?>
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner">
                <div class="row">
                    <div class="d-col-3">
                        <h1 class="d-fancy-title mb5"> <?php echo __('messages.common.invoice') ?> </h1>
                        <p class="font-color-gray"><?php echo __('messages.invoice.invoice_id') ?> #9CQ5X7</p>
                    </div>
                    <div class="d-col-1" style="padding-left: 10px !important;">
                        <img src="<?php echo getLogoUrl() ?>"
                                                class="img-logo">
                    </div>
                </div>

                    <div class="d-col-2">
                        <div class="col-66">
                            <small class="f-s-15 m-b-3"><b><?php echo __('messages.common.from') ?></b></small><br>
                            <p class="p-text mb-0">{{:companyName}}</p>
                            <p class="p-text mb-0">{{:companyAddress}}</p>
                            <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-9">
                            <div class="mb-2"><small class="from-font-size"><b><?php echo __('messages.common.to') ?></b></small><br></div>
                                <p class="p-text mb-3">&lt<?php echo __('messages.invoice.client_name')  ?>&gt</p>
                                <p class="p-text mb-3">&lt<?php echo __('messages.invoice.client_email')  ?>&gt</p>
                                <p class="p-text mb-3">&lt<?php echo __('messages.client_address')  ?>&gt</p>
                            <p class="p-text mb-0"><b><?php echo __('messages.invoice.invoice_date') ?>: </b> 25th Nov, 2020 8:03 AM</p>
                            <p class="p-text mb-0"><b><?php echo __('messages.invoice.due_date') ?>: </b> 26th Nov, 2020</p>
                        </div>
                    <div class="col-md-3 d-flex align-items-end">
                            <div class="text-center ">
                                <small  style="font-size: 15px; margin-bottom: 3px"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></small><br>
                                <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="110" width="110">
                            </div>
                        </div>
                </div>
                <div class="table d-table">
                    <div class="d-table-tr" <?php echo $styleCss ?>="background:{{:invColor}};color: #fff;">
                        <div class="d-table-th in-w-1 border-solid-ccc padding-8">#</div>
                        <div class="d-table-th in-w-2 border-solid-ccc padding-8"><?php echo __('messages.item') ?></div>
                        <div class="d-table-th in-w-3 border-solid-ccc padding-8"><?php echo __('messages.invoice.qty') ?></div>
                        <div class="d-table-th in-w-4 text-right amount-text-color"><?php echo __('messages.invoice.amount') ?></div>
                    </div>
                    <div class="d-table-body">
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1 border-solid-ccc padding-8"><span>1</span></div>
                            <div class="d-table-td in-w-2 border-solid-ccc padding-8">
                                <pre><?php echo __('messages.item') ?> 1</pre>
                            </div>
                            <div class="d-table-td in-w-3 border-solid-ccc padding-8">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right border-solid-ccc padding-8"><span >
                            <?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1 border-solid-ccc padding-8"><span>2</span></div>
                            <div class="d-table-td in-w-2 border-solid-ccc padding-8">
                                <pre><?php echo __('messages.item') ?> 2</pre>
                            </div>
                            <div class="d-table-td in-w-3 border-solid-ccc padding-8">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right border-solid-ccc padding-8"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1 border-solid-ccc padding-8"><span>3</span></div>
                            <div class="d-table-td in-w-2 border-solid-ccc padding-8">
                                <pre><?php echo __('messages.item') ?> 3</pre>
                            </div>
                            <div class="d-table-td in-w-3 border-solid-ccc padding-8">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right border-solid-ccc padding-8"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                    </div>
                    <div class="d-table-footer">
                        <div class="d-table-controls"></div>
                        <div class="d-table-summary">
                            <div class="d-table-summary-item">
                                <div class="d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                <div class="d-table-value"><?php echo getCurrencyAmount(300, true) ?></div>
                            </div>
                            <div class="d-table-summary-item">
                                <div class="d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                <div class="d-table-value"><?php echo getCurrencyAmount(50, true) ?></div>
                            </div>
                            <div class="d-table-summary-item">
                                <div class="d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                <div class="d-table-value">0%</div>
                            </div>
                            <div class="d-table-summary-item">
                                <div class="d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                <div class="d-table-value"><?php echo getCurrencyAmount(250, true) ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="break-25"></div>
                 <div class="row">
                    <div class="d-col-3">
                        <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                        <p class="font-color-gray">
                        Paypal , Stripe & manual payment method accept.<br>
                        Net 10 – Payment due in 10 days from invoice date.<br>
                        Net 30 – Payment due in 30 days from invoice date.
                        </p>
                    </div>
                    <div class="d-col-3">
                        <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                        <p class="font-color-gray">Invoice payment <?php echo __('messages.invoice.total') ?> ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</script>

<script id="newYorkTemplate" type="text/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-header">
                 <div class="ny-header-inner">
                      <div class="d-header-50">
                           <div class="d-header-brand">
                                <img src="<?php echo getLogoUrl() ?>" class="img-logo">
                           </div>
                           <div class="mt-3"></div>
                                <p class="p-text mb-0">{{:companyName}}</p>
                                <p class="p-text mb-0">{{:companyAddress}}</p>
                                <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                           </div>
                           <div class="d-header-50 d-right">
                                <div class="d-title"><?php echo __('messages.common.invoice') ?></div>
                                     <table class="summary-table">
                                          <tbody>
                                              <tr>
                                                  <td><strong><?php echo __('messages.invoice.invoice_id') ?>:</strong></td>
                                                  <td>#9B5QX7</td>
                                              </tr>
                                              <tr>
                                                <td><strong><?php echo __('messages.invoice.invoice_date') ?>:</strong></td>
                                                <td>25th Nov, 2020 8:03 AM</td>
                                              </tr>
                                              <tr>
                                                <td><strong><?php echo __('messages.invoice.due_date') ?>:</strong></td>
                                                <td>25 Nov 2020</td>
                                              </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                           </div>
                           <div class="d-body">
                                <div class="d-bill-to">
                                <div class="row">
                                      <div class="col-md-7">
                                         <strong class="to-font-size"><?php echo __('messages.common.to') ?></strong>
                                            <p class="p-text mb-0">&lt<?php echo __('messages.invoice.client_name') ?>&gt</p>
                                            <p class="p-text mb-0">&lt<?php echo __('messages.invoice.client_email') ?>&gt</p>
                                            <p class="p-text mb-0">&lt<?php echo __('messages.client_address') ?>&gt</p>
                                      </div>
                                      <div class="col-md-5 d-flex align-items-end">
                                        <div>
                                      <strong  style="font-size: ; margin-right: 142px"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?>:</b></strong>
                                     <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                                     </div>
                                      </div>
                                    </div>
                                  <div class="break-25"></div>
                                    <div class=table" width="100%">
                                         <div class="tu d-table-tr" <?php echo $styleCss ?>="background:{{:invColor}};color: white;padding: 0px 8px 0px 8px;">
                                            <div class="d-table-th in-w-1">#</div>
                                            <div class="d-table-th in-w-2"><?php echo __('messages.item')?></div>
                                            <div class="d-table-th in-w-3"><?php echo __('messages.invoice.qty')?></div>
                                            <div class="d-table-th in-w-4 text-right"><?php echo __('messages.invoice.amount')?></div>
                                        </div>
                                        <div class="d-table-body">
                                            <div class="d-table-tr" <?php echo $styleCss ?>="border-bottom: 1px solid {{:invColor}};">
                                                <div class="d-table-td in-w-1"><span>1</span></div>
                                                <div class="d-table-td in-w-2">
                                                    <pre><?php echo __('messages.item') ?> 1</pre>
                                                </div>
                                                <div class="d-table-td in-w-3">
                                                    1
                                                </div>
                                                <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                                            </div>
                                            <div class="d-table-tr" <?php echo $styleCss ?>="border-bottom: 1px solid {{:invColor}};">
                                                <div class="d-table-td in-w-1"><span>2</span></div>
                                                <div class="d-table-td in-w-2">
                                                    <pre><?php echo __('messages.item') ?> 2</pre>
                                                </div>
                                                <div class="d-table-td in-w-3">
                                                    1
                                                </div>
                                                <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                                            </div>
                                            <div  class="d-table-tr" <?php echo $styleCss ?>="border-bottom: 1px solid {{:invColor}};">
                                                <div class="d-table-td in-w-1"><span>3</span></div>
                                                <div class="d-table-td in-w-2">
                                                    <pre><?php echo __('messages.item') ?> 3</pre>
                                                </div>
                                                <div class="d-table-td in-w-3">
                                                    1
                                                </div>
                                                <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                                            </div>
                                        <div class="d-table-footer">
                                               <div class="d-table-controls"></div>
                                               <div class="d-table-summary">
                                                   <div class="d-table-summary-item">
                                                        <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                                        <div class="d-table-value"><?php echo getCurrencyAmount(300, true) ?></div>
                                                   </div>
                                                   <div class="d-table-summary-item" <?php echo $styleCss ?>="border-top: 1px solid {{:invColor}}; border-bottom: 1px solid {{:invColor}};">
                                                        <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                                        <div class="d-table-value"><?php echo getCurrencyAmount(50, true) ?></div>
                                                   </div>
                                                   <div class="d-table-summary-item">
                                                        <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                                        <div class="d-table-value">0%</div>
                                                   </div>
                                                   <div class="d-table-summary-item" <?php echo $styleCss ?>="border-top: 1px solid {{:invColor}};border-bottom: 1px solid {{:invColor}};">
                                                        <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                                        <div class="d-table-value"><?php echo getCurrencyAmount(250, true) ?></div>
                                                   </div>
                                               </div>
                                        </div>
                                    </div>
                           </div>
                      </div>
                      <div class="break-25"></div>
                      <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                      </div>
                      <br>
                 <p <?php echo $styleCss ?>="color:{{:invColor}}"><strong class="b"><?php echo __('messages.common.regards') ?> :</strong></p>
                 <span>{{:companyName}}</span>
            </div>
        </div>
    </div>



</script>

<script id="torontoTemplate" type="type/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner">
                <div class="row m-right-15">
                    <div class="t-col-2">
                        <img src="<?php echo getLogoUrl() ?>" class="img-logo">
                    </div>
                    <div class="t-col-2 text-right">
                        <p class="p-text mb-0">{{:companyName}}</p>
                        <p class="p-text mb-0">{{:companyAddress}}</p>
                        <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-9">
                        <strong class="tu mb5 to-font-size" <?php echo $styleCss ?>="color:{{:invColor}}"><?php echo __('messages.common.to') ?></strong>
                        <p class="p-text">
                            &lt<?php echo __('messages.invoice.client_name') ?>&gt<br>
                            &lt<?php echo __('messages.invoice.client_email')  ?>&gt<br>
                            &lt<?php echo __('messages.client_address')  ?>&gt
                        </p>
                        <strong class="tu mb5" style="color:{{:invColor}};font-size: 18px"><?php echo __('messages.common.invoice') ?></strong>
                        <table class="summary-table">
                            <tbody>
                            <tr>
                                <td class="tu"><strong class="mb5"><?php echo __('messages.invoice.invoice_id') ?>:</strong></td>
                                <td class="text-right">#84R41W</td>
                            </tr>
                            <tr >
                                <td class="tu"><strong class="mb5"><?php echo __('messages.invoice.invoice_date') ?>:</strong></td>
                                <td class="text-right">25th Nov, 2020 8:03 AM</td>
                            </tr>
                            <tr >
                                <td class="tu"><strong class="mb5"><?php echo __('messages.invoice.due_date') ?>:</strong></td>
                                <td class="text-right">26 Nov 2020</td>
                            </tr>
                            </tbody>
                         </table>
                        </div>
                        <div class="col-lg-3 d-flex align-items-end">
                            <div class="text-center">
                                <strong  style="font-size:15px ;"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></strong><br>
                                <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                            </div>
                        </div>
                    </div>
                <div class="table d-table">
                        <div class="tu d-table-tr" <?php echo $styleCss ?>="color: {{:invColor}}; border-bottom: 1px solid {{:invColor}}; border-top: 1px solid {{:invColor}};">
                            <div class="d-table-th in-w-1">#</div>
                            <div class="d-table-th in-w-2"><?php echo __('messages.item') ?></div>
                            <div class="d-table-th in-w-3"><?php echo __('messages.invoice.qty') ?></div>
                            <div class="d-table-th in-w-4 text-right"><?php echo __('messages.invoice.amount') ?></div>
                        </div>
                        <div class="d-table-body">
                            <div class="d-table-tr" <?php echo $styleCss ?>="border-bottom: 1px solid {{:invColor}};">
                                <div class="d-table-td in-w-1"><span>1</span></div>
                                <div class="d-table-td in-w-2">
                                    <pre><?php echo __('messages.item') ?> 1</pre>
                                </div>
                                <div class="d-table-td in-w-3">
                                    1
                                </div>
                                <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                            </div>
                            <div class="d-table-tr" <?php echo $styleCss ?>="border-bottom: 1px solid {{:invColor}};">
                                <div class="d-table-td in-w-1"><span>2</span></div>
                                <div class="d-table-td in-w-2">
                                    <pre><?php echo __('messages.item') ?> 2</pre>
                                </div>
                                <div class="d-table-td in-w-3">
                                    1
                                </div>
                                <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                            </div>
                            <div class="d-table-tr" <?php echo $styleCss ?>="border-bottom: 1px solid {{:invColor}};">
                                <div class="d-table-td in-w-1"><span>3</span></div>
                                <div class="d-table-td in-w-2">
                                    <pre><?php echo __('messages.item') ?> 3</pre>
                                </div>
                                <div class="d-table-td in-w-3">
                                    1
                                </div>
                                <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                            </div>
                        </div>
                        <div class="d-table-footer">
                            <div class="d-table-controls"></div>
                                <div class="d-table-summary">
                                   <div class="d-table-summary-item" border-top: 1px solid {{:invColor}}; border-bottom: 1px solid {{:invColor}};">
                                        <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                        <div class="d-table-value"><?php echo getCurrencyAmount(300, true) ?></div>
                                   </div>
                                   <div  class="d-table-summary-item" border-top: 1px solid {{:invColor}}; border-bottom: 1px solid {{:invColor}};">
                                        <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                        <div class="d-table-value"><?php echo getCurrencyAmount(50, true) ?></div>
                                   </div>
                                   <div  class="d-table-summary-item" border-top: 1px solid {{:invColor}}; border-bottom: 1px solid {{:invColor}};">
                                        <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                        <div class="d-table-value">0%</div>
                                   </div>
                                   <div class="d-table-summary-item" border-top: 1px solid {{:invColor}};>
                                        <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                        <div class="d-table-value"><?php echo getCurrencyAmount(250, true) ?></div>
                                   </div>
                               </div>
                        </div>
                </div>
                <div class="break-25"></div>
                 <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                      </div>
                      <br>
                <div class="d-header-50">
                    <p <?php echo $styleCss ?>="color:{{:invColor}}"><strong class="b"><?php echo __('messages.common.regards') ?> :</strong></p>
                       <span>{{:companyName}}</span>
                </div>
            </div>
        </div>
    </div>







</script>

<script id="rioTemplate" type="type/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner">
                <div class="row">
                    <div class="r-col-3">
                        <h1 class="fancy-title tu mb5" <?php echo $styleCss ?>="color: {{:invColor}};font-size: 34px"><?php echo __('messages.common.invoice') ?></h1>
                    </div>
                    <div class="r-col-1">
                        <img src="<?php echo getLogoUrl() ?>"
                                              class="img-logo">
                    </div>
                </div>
                <div class="break-50"></div>
                <div class="row m-right-15">
                    <div class="r-col-66">
                        <strong class="tu mb5 from-font-size" <?php echo $styleCss ?>="color: {{:invColor}};"><?php echo __('messages.common.from') ?></strong>
                        <p class="p-text mb-0">{{:companyName}}</p>
                        <p class="p-text mb-0 w-75">{{:companyAddress}}</p>
                        <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                    </div>
                    <div class="r-col-33">
                        <table class="summary-table">
                            <tbody>
                            <tr>
                                <td class="tu fwb" <?php echo $styleCss ?>="color: {{:invColor}};"><?php echo __('messages.invoice.invoice_id') ?>:</td>
                                <td class="text-right">#45C2R1</td>
                            </tr>
                            <tr>
                                <td class="tu fwb" <?php echo $styleCss ?>="color: {{:invColor}};"><?php echo __('messages.invoice.invoice_date') ?>:</td>
                                <td class="text-right">25th Nov, 2020 8:03 AM</td>
                            </tr>
                            <tr>
                                <td class="tu fwb" <?php echo $styleCss ?>="color: {{:invColor}};"><?php echo __('messages.invoice.due_date') ?>:</td>
                                <td class="text-right">26 Nov 2020</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="col-80">
                         <div class="mb-3"><strong class="tu mb5 to-font-size" style="color: {{:invColor}};"><?php echo __('messages.common.to') ?></strong></div>
                                 <p class="p-text mb-2">&lt<?php echo __('messages.invoice.client_name') ?>&gt<br></p>
                                 <p class="p-text mb-2">&lt<?php echo __('messages.invoice.client_email')  ?>&gt<br></p>
                                 <p class="p-text mb-2">&lt<?php echo __('messages.client_address')  ?>&gt</p>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-end">
                        <div class="text-center">
                            <strong  style="font-size:15px ;"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></strong><br>
                             <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                        </div>
                    </div>
                </div>
                <div class="table d-table">
                    <div class="tu d-table-tr" <?php echo $styleCss ?>="border-top: 1px solid {{:invColor}};">
                        <div class="d-table-th in-w-1">#</div>
                        <div class="d-table-th in-w-2"><?php echo __('messages.item') ?></div>
                        <div class="d-table-th in-w-3"><?php echo __('messages.invoice.qty') ?></div>
                        <div class="d-table-th in-w-4 text-right"><?php echo __('messages.invoice.amount') ?></div>
                    </div>
                    <div class="d-table-body">
                        <div class="d-table-tr" <?php echo $styleCss ?>="border-top: 1px solid {{:invColor}};">
                            <div class="d-table-td in-w-1"><span>1</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 1</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                        <div class="d-table-tr" <?php echo $styleCss ?>="border-top: 1px solid {{:invColor}};">
                            <div class="d-table-td in-w-1"><span>2</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 2</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                        <div class="d-table-tr" <?php echo $styleCss ?>="border-top: 1px solid {{:invColor}}; border-bottom: 1px solid {{:invColor}};">
                            <div class="d-table-td in-w-1"><span>3</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 3</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                    </div>
                    <div class="d-table-footer">
                        <div class="d-table-controls"></div>
                            <div class="d-table-summary">
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(300, true) ?></div>
                               </div>
                               <div class="d-table-summary-item" <?php echo $styleCss ?>="border-top: 1px solid {{:invColor}};">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(50, true) ?></div>
                               </div>
                               <div class="d-table-summary-item" <?php echo $styleCss ?>="border-top: 1px solid {{:invColor}};">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                    <div class="d-table-value">0%</div>
                               </div>
                               <div class="d-table-summary-item" <?php echo $styleCss ?>="border-top: 1px solid {{:invColor}}; border-bottom: 1px solid {{:invColor}};">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(250, true) ?></div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="break-25"></div>
                     <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                      </div>
                      <br>
                    <div class="d-header-50">
                        <p <?php echo $styleCss ?>="color:{{:invColor}}"><strong class="b"><?php echo __('messages.common.regards') ?> :</strong></p>
                        <span>{{:companyName}}</span>
                </div>
            </div>
        </div>
    </div>







</script>

<script id="londonTemplate" type="type/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner">
                <div class="row">
                    <div class="l-col-3">
                        <h1 class="l-fancy-title tu mb5" <?php echo $styleCss ?>="color:{{:invColor}}"><?php echo __('messages.common.invoice') ?></h1>
                        <p class="p-text mb-0">{{:companyName}}</p>
                        <p class="p-text mb-0 w-75">{{:companyAddress}}</p>
                        <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                    </div>
                    <div class="l-col-1">
                        <img src="<?php echo getLogoUrl() ?>"
                             class="img-logo">
                    </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-lg-9">
                        <strong class="tu mb5 to-font-size" <?php echo $styleCss ?>="color:{{:invColor}}"><?php echo __('messages.common.to') ?></strong>
                        <p class="p-text">
                            &lt<?php echo __('messages.invoice.client_name') ?>&gt<br>
                            &lt<?php echo __('messages.invoice.client_email')  ?>&gt<br>
                            &lt<?php echo __('messages.client_address')  ?>&gt
                        </p>
                        <div class="break-25"></div>
                        <table class="summary-table">
                            <tbody>
                            <tr>
                                <td class="tu fwb" <?php echo $styleCss ?>="color:{{:invColor}}"><?php echo __('messages.invoice.invoice_id') ?>:</td>
                                <td class="text-right">#2E5TS3</td>
                            </tr>
                            <tr>
                                <td class="tu fwb" <?php echo $styleCss ?>="color:{{:invColor}}"><?php echo __('messages.invoice.invoice_date') ?>:</td>
                                <td class="text-right">25th Nov, 2020 8:03 AM</td>
                            </tr>
                            <tr>
                                <td class="tu fwb" <?php echo $styleCss ?>="color:{{:invColor}}"><?php echo __('messages.invoice.due_date') ?>:</td>
                                <td class="text-right">26 Nov 2020</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-3 d-flex align-items-end">
                            <div class="text-center">
                                <strong  style="font-size:15px ;"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></strong><br>
                                 <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                            </div>
                        </div>
                    </div>

                <div class="table d-table">
                    <div class="tu d-table-tr" <?php echo $styleCss ?>="border-top: 2px solid {{:invColor}}; border-bottom: 2px solid {{:invColor}};">
                        <div class="d-table-th in-w-1">#</div>
                        <div class="d-table-th in-w-2"><?php echo __('messages.item') ?></div>
                        <div class="d-table-th in-w-3"><?php echo __('messages.invoice.qty') ?></div>
                        <div class="d-table-th in-w-4 text-right"><?php echo __('messages.invoice.amount') ?></div>
                    </div>
                    <div class="d-table-body">
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>1</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 1</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>2</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 2</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                        <div class="d-table-tr" <?php echo $styleCss ?>="border-bottom: 1px solid {{:invColor}};">
                            <div class="d-table-td in-w-1"><span>3</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 3</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                    </div>
                    <div class="d-table-footer">
                        <div class="d-table-controls"></div>
                            <div class="d-table-summary">
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(300, true) ?></div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(50, true) ?></div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                    <div class="d-table-value">0%</div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="fwb f-b tu d-table-label"><strong <?php echo $styleCss ?>="color:{{:invColor}}"><?php echo __('messages.invoice.total') ?>:</strong></div>
                                    <div class="fwb f-b d-table-value" <?php echo $styleCss ?>="color:{{:invColor}}"><?php echo getCurrencyAmount(250, true) ?></div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="break-25"></div>
                     <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                     </div>
                    <div class="break-50"></div>
                    <div class="row">
<!--                        <div class="l-col-66"><p class="thank" <?php echo $styleCss ?>="color:{{:invColor}}">Thank you!</p></div>-->
                        <div class="l-col-33"></div>
                    </div>
                    <div class="d-header-50">
                         <p <?php echo $styleCss ?>="color:{{:invColor}}"><strong class="b"><?php echo __('messages.common.regards') ?> :</strong></p>
                         <span>{{:companyName}}</span>
                    </div>
                </div>
            </div>
        </div>







</script>

<script id="istanbulTemplate" type="type/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner">
                <div class="row">
                    <div class="col-66">
                        <h1 class="i-fancy-title tu mb5" <?php echo $styleCss ?>="background:{{:invColor}};color : white;"><?php echo __('messages.common.invoice') ?></h1>
                    </div>
                    <div class="col-33">
                        <img src="<?php echo getLogoUrl() ?>"
                             class="img-logo">
                        <div class="break-25"></div>
                        <p class="p-text mb-0">{{:companyName}}</p>
                        <p class="p-text mb-0">{{:companyAddress}}</p>
                        <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                    </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-lg-9">
                        <strong class="tu mb5 to-font-size"><?php echo __('messages.common.to') ?></strong>
                        <p class="p-text">
                            &lt<?php echo __('messages.invoice.client_name') ?>&gt<br>
                            &lt<?php echo __('messages.invoice.client_email')  ?>&gt<br>
                            &lt<?php echo __('messages.client_address')  ?>&gt
                        </p>
                            <table class="summary-table">
                            <tbody>
                            <tr>
                                <td class="tu fwb"><?php echo __('messages.invoice.invoice_id') ?>:</td>
                                <td class="text-right">#22DA93</td>
                            </tr>
                            <tr>
                                <td class="tu fwb"><?php echo __('messages.invoice.invoice_date') ?>:</td>
                                <td class="text-right">25th Nov, 2020 8:03 AM</td>
                            </tr>
                            <tr>
                                <td class="tu fwb"><?php echo __('messages.invoice.due_date') ?>:</td>
                                <td class="text-right">26 Nov 2020</td>
                            </tr>
                            </tbody>
                            </table>
                        </div>
                        <div class="col-lg-3 d-flex align-items-end">
                            <div class="text-center">
                                <strong  style="font-size:15px ;"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></strong><br>
                                 <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                            </div>
                        </div>
                    </div>

                <div class="table d-table">
                    <div class="tu d-table-tr" <?php echo $styleCss ?>="border-top: 2px solid {{:invColor}};">
                        <div class="d-table-th in-w-1">#</div>
                        <div class="d-table-th in-w-2"><?php echo __('messages.item') ?></div>
                        <div class="d-table-th in-w-3"><?php echo __('messages.invoice.qty') ?></div>
                        <div class="d-table-th in-w-4 text-right"><?php echo __('messages.invoice.amount') ?></div>
                    </div>
                    <div class="d-table-body">
                        <div class="d-table-tr border-bottom-ffffff">
                            <div class="d-table-td in-w-1"><span>1</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 1</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                        <div class="d-table-tr border-bottom-ffffff">
                            <div class="d-table-td in-w-1"><span>2</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 2</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                        <div class="d-table-tr" <?php echo $styleCss ?>="border-bottom: 2px solid {{:invColor}};">
                            <div class="d-table-td in-w-1"><span>3</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 3</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                    </div>
                    <div class="d-table-footer">
                        <div class="d-table-controls"></div>
                            <div class="d-table-summary">
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(300, true) ?></div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(50, true) ?></div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                    <div class="d-table-value">0%</div>
                               </div>
                               <div class="d-table-summary-item" <?php echo $styleCss ?>="border-bottom: 2px solid {{:invColor}};">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(250, true) ?></div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="break-25"></div>
                     <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                      </div>
                      <br>
                    <div class="d-header-50">
                        <br><p><strong class="b text-black"><?php echo __('messages.common.regards') ?> :</strong></p>
                        <span>{{:companyName}}</span>
                </div>
            </div>
        </div>
    </div>







</script>

<script id="mumbaiTemplate" type="text/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner" <?php echo $styleCss ?>="border-top: 15px solid {{:invColor}}">
                <div class="row">
                    <div class="d-col-3">
                        <h1 class="fancy-title mb5"><?php echo __('messages.common.invoice') ?></h1>
                    </div>
                    <div class="d-col-1" style="padding-left: 10px !important;">
                    <img  src="<?php echo getLogoUrl() ?>"
                                              class="img-logo">
                    </div>
                </div>
                <div class="break-50"></div>
                <div class="row">
                    <div class="col-lg-9">
                        <strong class="from-font-size"><?php echo __('messages.common.from') ?></strong><br>
                        <p class="p-text mb-0">{{:companyName}}</p>
                        <p class="p-text mb-0">{{:companyAddress}}</p>
                        <p class="p-text mb-0">Mo: {{:companyPhone}}</p>

                            <strong style="margin-bottom: 3px" class="to-font-size mb-3"><?php echo __('messages.common.to') ?></strong><br>
                            <p class="p-text mb-2"> &lt<?php echo __('messages.invoice.client_name') ?>&gt<br></p>
                            <p class="p-text mb-2"> &lt<?php echo __('messages.invoice.client_email')  ?>&gt<br></p>
                            <p class="p-text mb-2">  &lt<?php echo __('messages.client_address')  ?>&gt</p>
                    </div>
                    <div class="col-lg-3 d-flex align-items-end">
                            <div class="text-center">
                                <strong  style="font-size:15px ;"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></strong><br>
                                 <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                            </div>
                        </div>
                </div>
                <hr <?php echo $styleCss ?>="background:{{:invColor}}">
                <div class="row">
                    <div class="d-col-33">
                        <table class="summary-table">
                            <tbody>
                            <tr>
                                <td class="fwb"><?php echo __('messages.invoice.invoice_id') ?>:</td>
                                <td class="text-right">#5F2I93</td>
                            </tr>
                            <tr>
                                <td class="fwb"><?php echo __('messages.invoice.invoice_date') ?>:</td>
                                <td class="text-right">25th Nov, 2020 8:03 AM</td>
                            </tr>
                            <tr>
                                <td class="fwb"><?php echo __('messages.invoice.due_date') ?>:</td>
                                <td class="text-right">26 Nov 2020</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="table d-table">
                    <div class="tu d-table-tr" <?php echo $styleCss ?>="border-bottom: 2px solid {{:invColor}};">
                        <div class="d-table-th in-w-1">#</div>
                        <div class="d-table-th in-w-2"><?php echo __('messages.item') ?></div>
                        <div class="d-table-th in-w-3"><?php echo __('messages.invoice.qty') ?></div>
                        <div class="d-table-th in-w-4 text-right"><?php echo __('messages.invoice.amount') ?></div>
                    </div>
                    <div class="d-table-body">
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>1</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 1</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>2</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 2</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                        <div class="d-table-tr" <?php echo $styleCss ?>="border-bottom: 2px solid {{:invColor}};">
                            <div class="d-table-td in-w-1"><span>3</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 3</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                    </div>
                    <div class="d-table-footer">
                        <div class="d-table-controls"></div>
                            <div class="d-table-summary">
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(300, true) ?></div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(50, true) ?></div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                    <div class="d-table-value">0%</div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(250, true) ?></div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="break-25"></div>
                     <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                      </div>
                      <br>
                    <div class="break-25"></div>
                    <div class="d-header-50">
                        <p <?php echo $styleCss ?>="color:{{:invColor}}"><strong class="b"><?php echo __('messages.common.regards') ?> :</strong></p>
                        <span>{{:companyName}}</span>
                </div>
            </div>
        </div>
    </div>









</script>

<script id="hongKongTemplate" type="text/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner d-no-pad">
                <div class="row hk-grey-box">
                    <div class="col-33">
                    <img src="<?php echo getLogoUrl() ?>"
                                             class="img-logo max-width-150"><br><br>
                        <p class="p-text mb-o" <?php echo $styleCss ?>="color:{{:invColor}}">{{:companyName}}</p>
                        <p class="p-text mb-0">{{:companyAddress}}</p>
                        <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                    </div>
                    <div class="row hk-grey-box">
                    <div class="col-lg-9">
                        <h1 class="fancy-title mb5" <?php echo $styleCss ?>="color:{{:invColor}}"><?php echo __('messages.common.invoice') ?></h1><br><br>
                        <table class="summary-table">
                            <tbody>
                            <tr>
                                <td class="fwb"><?php echo __('messages.invoice.invoice_id') ?>:</td>
                                <td class="text-right">#51ET78</td>
                            </tr>
                            <tr>
                                <td class="fwb"><?php echo __('messages.invoice.invoice_date') ?>:</td>
                                <td class="text-right">25 Nov 2020 8:03 AM</td>
                            </tr>
                            <tr>
                                <td class="fwb"><?php echo __('messages.invoice.due_date') ?>:</td>
                                <td class="text-right">26 Nov 2020</td>
                            </tr>
                            </tbody>
                        </table>

                        <strong class="to-font-size"><?php echo __('messages.common.to') ?></strong><br>
                        <p class="p-text mb-2"> &lt<?php echo __('messages.invoice.client_name') ?>&gt<br></p>
                            <p class="p-text mb-2"> &lt<?php echo __('messages.invoice.client_email')  ?>&gt<br></p>
                            <p class="p-text mb-2"> &lt<?php echo __('messages.client_address')  ?>&gt</p>
                    </div>
                    <div class="col-lg-3 d-flex align-items-end">
                            <div class="text-center">
                                <strong  style="font-size:15px ;"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></strong><br>
                                 <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                            </div>
                        </div>
                        </div>
                    <div class="table hk-table">
                        <div class="tu d-table-tr">
                            <div class="d-table-th in-w-1" <?php echo $styleCss ?>="border: 1px solid {{:invColor}};padding: 5px;">#</div>
                            <div class="d-table-th in-w-2" <?php echo $styleCss ?>="border: 1px solid {{:invColor}};padding: 5px;"><?php echo __('messages.item') ?></div>
                            <div class="d-table-th in-w-3" <?php echo $styleCss ?>="border: 1px solid {{:invColor}};padding: 5px;"><?php echo __('messages.invoice.qty') ?></div>
                            <div class="d-table-th in-w-4 text-right" <?php echo $styleCss ?>="border: 1px solid {{:invColor}};padding: 5px;"><?php echo __('messages.invoice.amount') ?></div>
                        </div>
                        <div class="<d-table-body">
                            <div class="d-table-tr">
                                <div class="d-table-td in-w-1" <?php echo $styleCss ?>="border: 1px solid {{:invColor}};padding: 5px;"><span>1</span></div>
                                <div class="d-table-td in-w-2" <?php echo $styleCss ?>="border: 1px solid {{:invColor}};padding: 5px;">
                                    <pre><?php echo __('messages.item') ?> 1</pre>
                                </div>
                                <div class="d-table-td in-w-3" <?php echo $styleCss ?>="border: 1px solid {{:invColor}};padding: 5px;">
                                    1
                                </div>
                                <div class="d-table-td in-w-4 text-right" <?php echo $styleCss ?>="border: 1px solid {{:invColor}};padding: 5px;"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                            </div>
                            <div class="d-table-tr">
                                <div class="d-table-td in-w-1" <?php echo $styleCss ?>="border: 1px solid {{:invColor}};padding: 5px;"><span>2</span></div>
                                <div class="d-table-td in-w-2" <?php echo $styleCss ?>="border: 1px solid {{:invColor}};padding: 5px;">
                                    <pre><?php echo __('messages.item') ?> 2</pre>
                                </div>
                                <div class="d-table-td in-w-3" <?php echo $styleCss ?>="border: 1px solid {{:invColor}};padding: 5px;">
                                    1
                                </div>
                                <div class="d-table-td in-w-4 text-right" <?php echo $styleCss ?>="border: 1px solid {{:invColor}};padding: 5px;"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                            </div>
                            <div class="d-table-tr">
                                <div class="d-table-td in-w-1" <?php echo $styleCss ?>="border: 1px solid {{:invColor}};padding: 5px;"><span>3</span></div>
                                <div class="d-table-td in-w-2" <?php echo $styleCss ?>="border: 1px solid {{:invColor}};padding: 5px;">
                                    <pre><?php echo __('messages.item') ?> 3</pre>
                                </div>
                                <div class="d-table-td in-w-3" <?php echo $styleCss ?>="border: 1px solid {{:invColor}};padding: 5px;">
                                    1
                                </div>
                                <div class="d-table-td in-w-4 text-right" <?php echo $styleCss ?>="border: 1px solid {{:invColor}};padding: 5px;"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                            </div>
                        </div>
                        <div class="d-table-footer">
                            <div class="d-table-controls"></div>
                            <div class="d-table-summary">
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(300, true) ?></div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(50, true) ?></div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                    <div class="d-table-value">0%</div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(250, true) ?></div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="break-25"></div>
                     <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                      </div>
                      <br>
                    <div class="hk-header-50">
                        <p class="b"><strong><?php echo __('messages.common.regards') ?> :</strong></p>
                        <span <?php echo $styleCss ?>="color:{{:invColor}}">{{:companyName}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>








</script>

<script id="tokyoTemplate" type="text/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner" <?php echo $styleCss ?>="border-top: 15px solid {{:invColor}}; border-bottom: 15px solid {{:invColor}};">
                <div class="row">
                    <div class="col-66">
                        <img  src="<?php echo getLogoUrl() ?>"
                              class="img-logo max-width-100">
                        <br><h6 class="p-text mb-0" <?php echo $styleCss ?>="color:{{:invColor}}">{{:companyName}}</h6>
                        <p class="p-text mb-0 w-75">{{:companyAddress}}</p>
                        <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                    </div>
                    <div class="col-33">
                        <h1 class="fancy-title mb5" <?php echo $styleCss ?>="color:{{:invColor}}"><?php echo __('messages.common.invoice') ?></h1>
                    </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-lg-9">
                        <strong class="mb5 to-font-size" <?php echo $styleCss ?>="color:{{:invColor}}"><?php echo __('messages.common.to') ?></strong>
                        <p class="p-text">
                            &lt<?php echo __('messages.invoice.client_name') ?>&gt<br>
                            &lt<?php echo __('messages.invoice.client_email')  ?>&gt<br>
                            &lt<?php echo __('messages.client_address')  ?>&gt
                        </p>
                            <table class="summary-table mt-5">
                                <tbody>
                                <tr>
                                    <td class="fwb mb5"><?php echo __('messages.invoice.invoice_id') ?>:</td>
                                    <td class="text-right">#24GD74</td>
                                </tr>
                                <tr>
                                    <td class="fwb mb5"><?php echo __('messages.invoice.invoice_date') ?>:</td>
                                    <td class="text-right">25 Nov 2020 8:03 AM</td>
                                </tr>
                                <tr>
                                    <td class="fwb"><?php echo __('messages.invoice.due_date') ?>:</td>
                                    <td class="text-right">26 Nov 2020</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                          <div class="col-lg-3 d-flex align-items-end">
                            <div class="text-center">
                                <strong  style="font-size:15px ;"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></strong><br>
                                 <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="table d-table">
                    <div class="tu d-table-tr" <?php echo $styleCss ?>="border-top: 2px solid {{:invColor}};">
                        <div class="d-table-th in-w-1">#</div>
                        <div class="d-table-th in-w-2"><?php echo __('messages.item') ?></div>
                        <div class="d-table-th in-w-3"><?php echo __('messages.invoice.qty') ?></div>
                        <div class="d-table-th in-w-4 text-right"><?php echo __('messages.invoice.amount') ?></div>
                    </div>
                    <div class="<d-table-body">
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>1</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 1</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>2</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 2</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                        <div class="d-table-tr" <?php echo $styleCss ?>="border-bottom: 2px solid {{:invColor}};">
                            <div class="d-table-td in-w-1"><span>3</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 3</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                    </div>
                    <div class="d-table-footer">
                        <div class="d-table-controls"></div>
                        <div class="d-table-summary">
                           <div class="d-table-summary-item">
                                <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                <div class="d-table-value"><?php echo getCurrencyAmount(300, true) ?></div>
                           </div>
                           <div class="d-table-summary-item">
                                <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                <div class="d-table-value"><?php echo getCurrencyAmount(50, true) ?></div>
                           </div>
                           <div class="d-table-summary-item">
                                <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                <div class="d-table-value">0%</div>
                           </div>
                           <div class="d-table-summary-item" <?php echo $styleCss ?>="border-bottom: 2px solid {{:invColor}};">
                                <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                <div class="d-table-value"><?php echo getCurrencyAmount(250, true) ?></div>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="break-25"></div>
                 <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                      </div>
                      <br>
                <div class="d-header-50">
                    <p class="b"><strong><?php echo __('messages.common.regards') ?> :</strong></p>
                    <span <?php echo $styleCss ?>="color: {{:invColor}}">{{:companyName}}</span>
                </div>
            </div>
        </div>
    </div>







</script>

<script id="parisTemplate" type="text/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner">
                <div class="row">
                    <div class="col-33">
                        <h1 class="p-fancy-title tu mb5" <?php echo $styleCss ?>="border-bottom: 10px solid {{:invColor}};"><?php echo __('messages.common.invoice') ?></h1>
                    </div>
                    <div class="col-33"></div>
                    <div class="col-33">
                        <img src="<?php echo getLogoUrl() ?>"
                                             class="img-logo max-width-150"></div>
                </div>
                <br>
                <div class="row m-r-15">
                    <div class="col-66">
                        <strong class="tu mb5 from-font-size" <?php echo $styleCss ?>="color:{{:invColor}}"><?php echo __('messages.common.from') ?></strong>
                        <p class="p-text mb-0">{{:companyName}}</p>
                        <p class="p-text mb-0 w-75">{{:companyAddress}}</p>
                        <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                    </div>
                    <div class="col-33">
                        <table class="summary-table">
                            <tbody>
                            <tr>
                                <td class="tu fwb text-black"><?php echo __('messages.invoice.invoice_id') ?>:</td>
                                <td class="text-right">#56PC98</td>
                            </tr>
                            <tr>
                                <td class="tu fwb text-black"><?php echo __('messages.invoice.invoice_date') ?>:</td>
                                <td class="text-right">25 Nov 2020 8:03 AM</td>
                            </tr>
                            <tr>
                                <td class="tu fwb text-black"><?php echo __('messages.invoice.due_date') ?>:</td>
                                <td class="text-right">26 Nov 2020</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="break-25"></div>
                <div class="row">
                        <div class="col-lg-9 ">
                            <div class="mb-2"><strong class="tu to-font-size" style="color:{{:invColor}}"><?php echo __('messages.common.to') ?></strong></div>

                            <p class="p-text mb-2">&lt<?php echo __('messages.invoice.client_name') ?>&gt<br></p>
                            <p class="p-text mb-2">&lt<?php echo __('messages.invoice.client_email')  ?>&gt<br></p>
                            <p class="p-text mb-2">&lt<?php echo __('messages.client_address')  ?>&gt</p>
                        </div>
                    <div class="col-lg-3 d-flex align-items-end">
                            <div class="text-center">
                                <strong  style="font-size:15px ;"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></strong><br>
                                 <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                            </div>
                        </div>
                </div>
                <div class="table d-table">
                    <div class="tu d-table-tr" <?php echo $styleCss ?>="color: {{:invColor}};border-top: 2px solid {{:invColor}};border-bottom: 2px solid {{:invColor}}">
                        <div class="d-table-th in-w-1">#</div>
                        <div class="d-table-th in-w-2"><?php echo __('messages.item') ?></div>
                        <div class="d-table-th in-w-3"><?php echo __('messages.invoice.qty') ?></div>
                        <div class="d-table-th in-w-4 text-right"><?php echo __('messages.invoice.amount') ?></div>
                    </div>
                    <div class="<d-table-body">
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>1</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 1</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>2</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 2</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>3</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 3</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true) ?></span></div>
                        </div>
                    </div>
                    <div class="d-table-footer">
                        <div class="d-table-controls"></div>
                        <div class="d-table-summary">
                           <div class="d-table-summary-item">
                                <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                <div class="d-table-value"><?php echo getCurrencyAmount(300, true) ?></div>
                           </div>
                           <div class="d-table-summary-item">
                                <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                <div class="d-table-value"><?php echo getCurrencyAmount(50, true) ?></div>
                           </div>
                           <div class="d-table-summary-item">
                                <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                <div class="d-table-value">0%</div>
                           </div>
                           <div class="d-table-summary-item">
                                <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                <div class="d-table-value" <?php echo $styleCss ?>="color: {{:invColor}};"><?php echo getCurrencyAmount(250, true) ?></div>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="break-25"></div>
                 <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                      </div>
                      <br>
                <div class="d-header-50">
                        <p><strong class="b"><?php echo __('messages.common.regards') ?> :</strong></p>
                        <span <?php echo $styleCss ?>="color:{{:invColor}}">{{:companyName}}</span>
                </div>
            </div>
        </div>
    </div>



</script>
