@extends('layouts.app')
 @section('title','Leo Pledge')
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
      <h1>लियो प्रण</h1>
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
        म प्रण गर्दछु कि, मेरा हातहरू, दीन दुःखीका सहयोगका लागि तुरून्त प्रभावित भई सेवा गर्न पुग्ने छन् । मेरा कानहरू सधैं सहये गाका लागि क्रान्दन गर्नेहरूको आवाज सुन्न तत्पर रहने छन् । मेरा आँखाहरू अरूको करूणावस्था देख्न सक्ने छैन । मेरो मस्तिष्क कुनै पनि व्यक्तिलाई उसको सपनाको सामिप्य लैजान प्रयत्नशील रहने छ र म आफू स्वयमलाई मेरो समाज, मेरा राज्य वा क्षेत्र र मेरा राष्ट्रको उत्थानमा अग्रसर गराउने छु ।
      </p>
    </article>
    </div>
    <div class="col-md-4 ">
      <img class="pt-4" src="/graphics/logo/logo_alt.png" alt="" width="100%">
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
    ><h3 class="text-center">Leo Pledge</h3>
      <article>
        I pledge of my hands, extended and open to help those in need. I pledge of my heart, reach for it, and it will be touched. I pledge of my ears, to hear another’s outcry, my eyes to see the plight of others, my knowledge to bring a man closer to his dreams. I pledge of myself for the betterment of my community and my country.
      </article>
    </div>

@endsection

