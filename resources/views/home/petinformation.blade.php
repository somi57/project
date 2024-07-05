<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Pet Information
        </h2>
      </div>
      <div class="row">
        @foreach ( $animal as $animals)
        <div class="col-sm-6 col-md-3 col-lg-3">
          <div class="box">
            
              <div class="img-box">
                <img src="animals/{{$animals->image}}" alt="">
              </div>
              <div class="detail-box">
                <h6>{{$animals->name}}</h6>
              </div>
              <div class="detail-box">
                <h6>{{$animals->age}}</h6>
              </div>
              <div class="detail-box">
                <h6>{{$animals->category}}</h6>
              </div>
              <div>
                <a href="/adoptionform" class="btn btn-success">Adopt</a>
              </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  