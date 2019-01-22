@extends('frontend.includes.frontend_design')

@section('content')
    <section class="bgGrey sect-header text-wrap">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="colorBlue"> About Us</h1>

            </div>
        </div>

        <div class ="bgWhite sect-pad-top sect-pad-bottom text-wrap">
            <div class="row">
                <div class="col-xs-12 text-justify">
                    <div class="about-img col-md-8">
                        <img src="{{asset('public/adminpanel/uploads/about/'.$about->image)}}" class="img-rounded" width="1100px" >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <p>Namaskar,</p>
    <p>Upakar Foundation Nepal or also known as (UFN).</p>
    <p> UFN is a Non Governmental Organization(NGO).We are also a non profitable organization established on Poush 12,2074 for the promotion and protection of social justice, human rights and pro-poor development.This organization was established to provide the free services (Health,Education)to the poor and needy people and provide awareness in our society.We believe that we all Nepalese are a family and one should come ahead in the need of other.So we are here with the slogan "Maanav Hit,Haamro Jit."
    </p>
    <p>
        <strong><u>Why is UFN for?</u></strong>
    </p>
    <p>
        It is an Non Profitable & Non Governmental Organization.It's aim is to unite, organize and mobilise civil society to create a peaceful, democratic and just Nepal.</p>

    </p>
    <br>
    <p>
        To perform health related programmes in different part of the country.
    </p>
    <br>
    <p>
        To give knowledge about the health and the cleanliness to the people and to uplift them to perform the activities so that our environment will be clean and healthy.
    </p>
    <br>
    <p>
        To give different kinds of technical and skills related trainings.
    </p>
    <p>
        <strong><u>Members Informations:</u></strong>
    </p>
    <p>The Executive Committee is comprised of 7 members. These democratically elected members, including a president, a vice-president,  a general secretary,  and a treasurer and 3 board members.UFN also has other active members to support the decision taken from the BOD and to help the perform the task.UFN aims to carry out various programmes effectively and efficiently all around the 77 districts of Nepal.
    </p>

    <p>
        <strong><u>What are the requirements for being a member?</u></strong>
    </p>
    <p>At first an individual should be a Nepalese citizen and should be above 16 years old.</p><br>
    <p>An individual should be physically and mentally strong.</p><br>
    <p>An individual should not have any police cases.</p><br>
    <p>An individual should follow the rules and regulations of the foundation.</p>



@endsection
