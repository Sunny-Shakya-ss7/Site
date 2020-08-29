@extends('layouts.app')
 @section('title','Salutation')
@section('content')

    <style>
      @media (max-width: 1080px) {
      .v1 {
        left: 3rem !important;
      }
      .v2 {
        left: 4rem !important;
      }
      .v3 {
        left: 5rem !important;
      }
      .v4 {
        left: 6rem !important;
      }
    }

    @media (max-width: 700px) {
      .v1 {
        left: 2rem !important;
      }
      .v2 {
        left: 3rem !important;
      }
      .v3 {
        left: 4rem !important;
      }
      .v4 {
        left: 5rem !important;
      }
    }
    </style>
    
    <img class="vertical2 v1" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 6rem;" />
    <img class="vertical2 v2" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 7.5rem;" />
    <img class="vertical2 v3" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 9rem;" />
    <img class="vertical2 v4" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 10.5rem;"/>
    <img class="image2" src="{{asset('graphics/logo/a.png')}}" alt="logo" />

    <header class="header">
      <img class="bar" src="{{asset('graphics/png/bar.png')}}" alt="bar" />
      <h1>राष्ट्रिय झण्डाको अभिवादन</h1>
    </header>

    <div class="row motto" style="
          background: rgb(78, 77, 77); /* fallback for old browsers */
          background: -webkit-linear-gradient(
          to right,
          #27313a,
          #2d3944
          ); /* Chrome 10-25, Safari 5.1-6 */
          background: linear-gradient(
          to right,
          #27313a,
          #2d3944
          );
         border-radius:5px;"
     >
      <div class="col-md-5">
      <article>
      <p class="text-justify" style="padding: 5%; font-size: 3vh;">
       हामी हाम्रो राष्ट्रिय ध्वजालाई अभिवादन गर्दै यसप्रति आफ्नो अटुट दृढ विश्वास व्यक्त गर्दछौँ । एउटा सुयोग्य नागरिकको हैसियतले उत्साह र तत्परताका साथ आफ्नो कर्तव्य पूरा गरे मात्र यसको महिमा तथा गौरव बढ्दछ । यसको सुनौला अक्षरले लेखिएको इतिहासले नै हामीलाई स्वदेशको मर्यादाका निम्ति सत्कार्य गर्ने प्रेरणा प्रदान गर्दछ । हामी हाम्रो राष्ट्रिय ध्वजाप्रति अविचलित निष्ठाको घोषणा गर्दै, यसले देखाएको बाटोमा अघि बढ्दै यसको महिमा बढाउन तथा यसलाई राष्ट्रहरुका माझमा गौरवका साथ फरफराई राख्न साँचो प्रयास गर्ने छौँ ।
      </p>
    </article>
    </div>
    <div class="col-md-4 ">
      <img src="/graphics/png/nepal.png" alt="">
    </div>
    </div>
    <div class="container1" style="
          background: rgb(78, 77, 77); /* fallback for old browsers */
          background: -webkit-linear-gradient(
          to right,
          #27313a,
          #2d3944
          ); /* Chrome 10-25, Safari 5.1-6 */
          background: linear-gradient(
          to right,
          #27313a,
          #2d3944
          );
         border-radius:5px;"
    >
    <h3 class="text-center">Flag Salutation</h3>
      <article>
        “We salute our Nation Flag and pledge our allegiance to the same. Its honour and its glory depend upon the zeal and assiduity with which each of us will shoulder our responsibility of a good citizen. Its glorious history inspires us to put in good work for the fair name of our Country. We declare our unflinching loyalthy to our Country. We maintain that its course shall be our course and that each individual amongst us will make genuine effort to add to its luster and glory and make our National Flag fly proudly in the comity of nations.”
      </article>
    </div>

@endsection