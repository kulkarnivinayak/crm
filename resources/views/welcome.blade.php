@extends('layouts.app')
    @section('content')
    <div class="container">
      <ul class="collection">
        <li class="collection-header"><h4>Customers</h4></li>
        <li class="divider"></li>
        <li class="collection-item avatar">
          <img src="https://placehold.it/180x180" alt="" class="circle">
          <span class="title">Title</span>
          <p>First Line</p>
          <a href="#!" class="secondary-content"><i class="material-icons">send</i></a>
        </li>
        <li class="collection-item avatar">
          <img src="https://placehold.it/180x180" alt="" class="circle">
          <span class="title">Title</span>
          <p>First Line</p>
          <a href="#!" class="secondary-content"><i class="material-icons">send</i></a>
        </li>
        <li class="collection-item avatar">
          <img src="https://placehold.it/180x180" alt="" class="circle">
          <span class="title">Title</span>
          <p>First Line</p>
          <a href="#!" class="secondary-content"><i class="material-icons">send</i></a>
        </li>
        <li class="collection-item avatar">
          <img src="https://placehold.it/180x180" alt="" class="circle">
          <span class="title">Title</span>
          <p>First Line</p>
          <a href="#!" class="secondary-content"><i class="material-icons">send</i></a>
        </li>
      </ul>
      <table class="highlight responsive-table">
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Item Name</th>
              <th data-field="price">Item Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
          <tr>
            <td>Shannon</td>
            <td>KitKat</td>
            <td>$9.99</td>
          </tr>
        </tbody>
      </table>

      <div class="row">
        <div class="col s12 m6">
          <div class="card sticky-action" style="overflow: hidden;">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="https://placehold.it/100x100">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>

              <p><a href="#!">This is a link</a></p>
            </div>

            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>

            <div class="card-reveal" style="display: none; transform: translateY(0px);">
              <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  @include('layouts.partials.footer')
@endsection