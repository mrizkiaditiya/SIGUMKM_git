@extends('../admin.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2>Google Map</h2>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
           <form action="{{route('admin.store')}}" method="post" id="boxmap">
           @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="Title" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="title">Description</label>
                    <input type="text" name="description" placeholder="Description" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="lat">lat</label>
                    <input type="text" name="lat" placeholder="lat" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="lng">lng</label>
                    <input type="text" name="lng" placeholder="lng" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Add Map" class="btn btn-success"/>
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <h2>Show google Map</h2>
            <div id="map"></div>       
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiNDYxNzAxMDA1MCIsImEiOiJja3A2Z2dhajUyM2h0MnBtd2F3ZmtoeTFwIn0.wB--Q8OSmzu_wfa17P2shA';
        var map = new mapboxgl.Map({
          container: 'map',
          style: 'mapbox://styles/mapbox/streets-v11',
          center: [106.660172, 10.762622], //lng,lat 10.818746, 106.629179
          zoom: 7
        });
        var test ='<?php echo $dataArray;?>';  //ta nh???n d??? li???u t??? Controller
        var dataMap = JSON.parse(test); //chuy???n ?????i n?? v??? d???ng m?? Mapbox y??u c???u

        // ta t???o d??ng l???p ????? for ra c??c ?????i t?????ng
        dataMap.features.forEach(function(marker) {

            //t???o th??? div c?? class l?? market, ????? h???i ch???nh css cho market
            var el = document.createElement('div');
            el.className = 'marker';

            //g???n marker ???? t???i v??? tr?? t???a ?????
            new mapboxgl.Marker(el)
                .setLngLat(marker.geometry.coordinates)
                .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
            .setHTML('<h3>' + marker.properties.title + '</h3><p>' + marker.properties.description + '</p>'))
                .addTo(map);
        });

    </script>
    <style>
        #map {
            width: 100%;
            height: 500px;
        }
        .marker {
            background-image: url('/images/point.png');
            background-repeat:no-repeat;
            background-size:100%;
            width: 50px;
            height: 100px;
            cursor: pointer; 
        }
</style>
@endsection
