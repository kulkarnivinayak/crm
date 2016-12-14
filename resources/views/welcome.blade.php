@extends('layouts.app')
    @section('content')
    <div class="container">
      <table class="highlight responsive-table">
        <thead>
          <tr>
              <th data-field="id">Date</th>
              <th data-field="name">Name</th>
              <th data-field="company">Company</th>
              <th data-field="address">Address</th>
              <th data-field="phone">Phone</th>
              <th data-field="email">Email</th>
              <th data-field="referral">Referral</th>
              <th data-field="existingPos">Existing POS</th>
              <th data-field="notes">Notes</th>
              <th data-field="updates">Updates</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $date }}</td>
            <td>Satish Raja</td>
            <td>Big Matka</td>
            <td>Kormangala</td>
            <td><a href="tel:919282388384">+91 92823 88384</a></td>
            <td><a href="mailto:satish@bigmatka.in">satish@bigmatka.in</a></td>
            <td>N/A</td>
            <td>CIRQ</td>
            <td>Lorem ipsum Ex commodo nulla Excepteur ad consectetur laboris quis sunt mollit.</td>
            <td>Lorem ipsum Ex commodo nulla Excepteur ad consectetur laboris quis sunt mollit.</td>
          </tr>
        </tbody>
      </table>
    </div>
  @include('layouts.partials.footer')
@endsection