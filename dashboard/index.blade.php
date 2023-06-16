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
                <div class="view-sec">
                    <div class="deal-view-sec">
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
                    <div class="advertiser-view-sec">
                        <div class="advertiser-filter-sec">
                            <h2>Advertiser Dashboard</h2>
                            <div class="advertiser-filter">
                                <input type="text" name="advertiser_daterange" id="advertiser_daterange" value="" placeholder="mm/dd/yyyy - mm/dd/yyyy" />
                                <input type="hidden" name="advertiser_start_daterange" id="advertiser_start_daterange" value="" />
                                <input type="hidden" name="advertiser_end_daterange" id="advertiser_end_daterange" value="" />
                            </div>
                        </div>
                        
                        <div class="advertiser-view">
                            <div class=" col-9 advertiser-component" >
                                <input type="text" name="advertiser_inflight" id="advertiser_inflight" value="0 Inflight">
                                <input type="text" name="advertiser_proposal" id="advertiser_proposal" value="0 Proposal">
                                <input type="text" name="advertiser_ended" id="advertiser_ended" value="0 Ended">
                                <input type="text" name="advertiser_approved" id="advertiser_approved" value="0 Approved">
                            </div>
                            <div class=" col-9 advertiser-component" >
                                <input type="text" name="advertiser_order" id="advertiser_order" value="0 Ordered">
                                <input type="text" name="advertiser_planning" id="advertiser_planning" value="0 Planning">
                                <input type="text" name="advertiser_expired" id="advertiser_expired" value="0 Expired">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop