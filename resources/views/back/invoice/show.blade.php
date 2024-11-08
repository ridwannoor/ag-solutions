@extends('back.layouts.app')

<!-- BEGIN: Subheader -->
@section('m-subheader')
<div class="m-subheader">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">{{ $judul }}</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="/admin/home" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="/admin/partner" class="m-nav__link">
                        <span class="m-nav__link-text">{{ $judul }}</span>
                    </a>
                </li>
                {{-- <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="#" class="m-nav__link">
                        <span class="m-nav__link-text">JQVMap</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
@endsection
<!-- END: Subheader -->

@section('m-content')
    
<div class="m-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="m-portlet">
                <div class="m-portlet__body m-portlet__body--no-padding">
                    <div class="m-invoice-2">
                     
                       
                        <div class="m-invoice__wrapper">
                            <div class="m-invoice__head"
                                style="background-image: url(assets/app/media/img/logos/bg-6.html);">
                                <div class="m-invoice__container m-invoice__container--centered">
                                    <div class="m-invoice__logo">
                                        <a href="#">
                                            <h1>INVOICE</h1>
                                        </a>
                                        <a href="#">
                                            <img src="{{ url('data_file/'.$generals->image) }}" width="250px">
                                        </a>
                                    </div>
                                    <span class="m-invoice__desc">
                                        <span class="text-uppercase" ><strong>{{ $generals->title }}</strong></span>
                                        <span>{{ $generals->alamat }}</span>
                                        <span>{{ "phone : " . $generals->phone }}</span>
                                        <span>{{ "email : " . $generals->email }}</span>
                                    </span>
                                    <div class="m-invoice__items">
                                        <div class="m-invoice__item">
                                            <span class="m-invoice__subtitle">Tanggal</span>
                                            <span class="m-invoice__text">{{ date('l, d-m-Y', strtotime($invoices->tgl_invoice)) }}</span>
                                        </div>
                                        <div class="m-invoice__item">
                                            <span class="m-invoice__subtitle">INVOICE NO.</span>
                                            <span class="m-invoice__text">{{ $invoices->no_invoice }}</span>
                                        </div>
                                        <div class="m-invoice__item">
                                            <span class="m-invoice__subtitle">INVOICE TO.</span>
                                            <span class="m-invoice__text">
                                                <strong class="text-uppercase">{{ $invoices->partner->nama_perusahaan . ", " . $invoices->partner->badan->title }}</strong> <br>
                                                {{ $invoices->partner->alamat }} <br>
                                                {{ $invoices->partner->telp }} 
                                                {{-- {{ $invoices->kontak_person }} --}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-invoice__body m-invoice__body--centered">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Deskripsi</th>
                                                <th>Qty</th>
                                                <th>Harga</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        @php
                                            $harga = 0 ;
                                            $subjumlah = 0;
                                            $subtotal = 0;                                            
                                            $diskon = 0;
                                            $ppn = 0;
                                            $total = 0;
                                            $lainnya = 0;
                                        @endphp
                                        <tbody>
                                            @foreach ($invoices->invoicedetail as $item)
                                            @php
                                                $jumlah = $item->qty * $item->harga;
                                                $subjumlah += $jumlah;                                                
                                                $subtotal = $subjumlah - $invoices->diskon;
                                                // $ppn = $subtotal*10/100;
                                                $total = $subtotal  + $lainnya;
                                            @endphp
                                                <tr>
                                                    <td>{{ $item->deskripsi }}</td>
                                                    <td>{{ $item->qty }}</td>
                                                    <td>{{ number_format($item->harga)  }}</td>
                                                    <td class="m--font-danger">{{ number_format($jumlah)  }}</td>
                                                </tr>     
                                            @endforeach                                                                                 
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td style="text-align: right">Sub Jumlah</td>
                                                <td style="text-align: right">{{ number_format($subjumlah) }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td style="text-align: right">Diskon</td>
                                                <td style="text-align: right">{{ number_format($invoices->diskon) }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td style="text-align: right">Sub Total</td>
                                                <td style="text-align: right">{{ number_format($subtotal) }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td style="text-align: right">Lainnya</td>
                                                <td style="text-align: right">{{ number_format($lainnya) }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td style="text-align: right">Total</td>
                                                <td  style="text-align: right"><strong>{{ number_format($total) }}</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="m-invoice__footer">
                                <div class="m-invoice__table  m-invoice__table--centered table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>BANK</th>
                                                <th>ACC.NO.</th>
                                                <th>DUE DATE</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>BARCLAYS UK</td>
                                                <td>12345678909</td>
                                                <td>Jan 07, 2018</td>
                                              
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
