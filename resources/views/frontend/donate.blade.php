<!DOCTYPE html>
<html lang="en">
@include('frontend.includes.head')
<body class="container">
@include('frontend.includes.nav')
<section class="bgGrey sect-header text-wrap">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="colorBlue"> Donate Section</h1>

        </div>
    </div>
</section>
<section class="bgWhite sect-pad-top sect-pad-bottom text-wrap">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <h4>{!! htmlspecialchars_decode($donate->body) !!}</h4><br>
            <h4 class="account-title">Organization Name:{{$donate->name}}</h4>
            <h4 class="bank-title">Bank Name:{{$donate->bank_name}}</h4>
            <h4 class="account-numb">Bank Account:{{$donate->bank_account}}</h4>

        </div>
    </div>
</section>
@include('frontend.includes.footer')
@include('frontend.includes.script')
</body>
</html>