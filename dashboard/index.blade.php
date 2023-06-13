@extends('layouts.default')

@section('title') {{'Dashboard'}} @endsection

@section('content')
<div class="col-12">
    <div class="continer">
        <div class="row">
            <div class="col-3">
                <form method="post" id="dashboard_deal">
                    @if( $dashboard['advertiserList'] )
                        <select name="deal_no" id="deal_no">
                            <option value="">Deal No</option>
                            @foreach( $dashboard['advertiserList'] as $advertiserKey =>$advertiserValue )
                                <option value="{{ $advertiserValue['id'] }}">{{ $advertiserValue['title'] }}</option>
                            @endforeach
                        </select>
                    @endif
                    @if( $dashboard['campaignList'] )
                        <select name="campaign" id="campaign">
                            <option value="">Campaign</option>
                            @foreach( $dashboard['campaignList'] as $campaignKey =>$campaignValue )
                                <option value="{{ $campaignValue['id'] }}">{{ $campaignValue['title'] }}({{ $campaignValue['id'] }})</option>
                            @endforeach
                        </select>
                    @endif
                    @if( $dashboard['demographicsList'] )
                        <select name="demographics" id="demographics">
                            <option value="">Demographics</option>
                            @foreach( $dashboard['demographicsList'] as $demographicsKey =>$demographicsValue )
                                <option value="{{ $demographicsValue['id'] }}">{{ $demographicsValue['name'] }}</option>
                            @endforeach
                        </select>
                    @endif
                    @if( $dashboard['outletList'] )
                        <select name="outlet" id="outlet">
                            <option value="">Out Let</option>
                            @foreach( $dashboard['outletList'] as $outletKey =>$outletValue )
                                <option value="{{ $outletValue['id'] }}">{{ $outletValue['outlet_type'] }}</option>
                            @endforeach
                        </select>
                    @endif
                    @if( $dashboard['agencyList'] )
                        <select name="agency" id="agency">
                            <option value="">Agency</option>
                            @foreach( $dashboard['agencyList'] as $agencyKey =>$agencyValue )
                                <option value="{{ $agencyValue['id'] }}">{{ $agencyValue['name'] }}</option>
                            @endforeach
                        </select>
                    @endif
                    @if( $dashboard['locationList'] )
                        <select name="location" id="location">
                            <option value="">Location</option>
                            @foreach( $dashboard['locationList'] as $locationKey =>$locationValue )
                                <option value="{{ $locationValue['id'] }}">{{ $locationValue['name'] }}</option>
                            @endforeach
                        </select>
                    @endif
                    @if( $dashboard['brandList'] )
                        <select name="brand" id="brand">
                            <option value="">Brand</option>
                            @foreach( $dashboard['brandList'] as $brandKey =>$brandValue )
                                <option value="{{ $brandValue['id'] }}">{{ $brandValue['product_name'] }}</option>
                            @endforeach
                        </select>
                    @endif

                    <input type="text" name="daterange" value="01/01/2015 - 01/01/2015" />
                </form>
            </div>
            <div class="col-9">
                <h2>Deal View</h2>
                <div class="deal-view">
                    <div class="col-3">
                        <div class="deal-component" >
                            <span>Dollars</span>
                            <input type="text" name="" id="deal_dollars" value="">
                        </div>
                        <div class="deal-component" >
                            <span>CPM</span>
                            <input type="text" name="" id="deal_cpm" value="">
                        </div>
                        <div class="deal-component" >
                            <span>Impressions</span>
                            <input type="text" name="" id="deal_impressions" value="">
                        </div>
                        <div class="deal-component" >
                            <span>GRP</span>
                            <input type="text" name="" id="deal_grp" value="">
                        </div>
                        <div class="deal-component" >
                            <span>Deal Unit</span>
                            <input type="text" name="" id="deal_deal_unit" value="">
                        </div>
                    </div>    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@stop