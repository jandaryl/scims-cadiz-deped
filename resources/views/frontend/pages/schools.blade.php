@extends('layouts.frontend-bulma')

@section('title', 'Schools')

@section('content')
    <h1 class="text-center lg:text-2xl md:text-2xl sm:text-xl text-xl mb-6 mt-4">Elementary Schools</h1>
      <div class="columns is-multiline">
        <div class="column is-half">
          <div class="flex flex-col items-center box">
            <div class="inline-flex flex-row">
              <div class="inline-flex flex-col">
                <p class="text-left lg:text-xl md:text-xl sm:text-lg text-lg">District I</p>
                <p class="w-24 lg:text-lg md:text-lg sm:text-base text-base ml-16 mb-4 mt-1">School ID</p>
                @foreach($schools as $school)
                    @if($school->district === 'I' && strpos($school->school_name, 'High School') === false)
                        <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">{{ $school->school_id }}</p>
                    @endif
                @endforeach
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117529</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117530</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117531</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117532</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117533</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117534</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117535</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117536</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117537</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117538</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117539</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117540</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117541</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16 lg:mb-12">117542</p>
              </div>
              <div class="inline-flex flex-col">
                <p class="text-lg ml-12 mb-4 mt-8">School Name</p>
                @foreach($schools as $school)
                    @if($school->district === 'I' && strpos($school->school_name, 'High School') === false)
                        @php
                            $slug_school = str_slug($school->school_name);
                        @endphp
                        <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('school.info', $school->id) }}">{{
                            $school->school_name
                        }}</a>
                    @endif
                @endforeach
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'agudo-elementary-school') }}">Agudo Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'alimatoc-elementary-school') }}">Alimatoc Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'cadiz-east-ii-elementary-school') }}">Cadiz East II Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'dr-vf-gustilo-elementary-school') }}">Dr. VF Gustilo Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'hiyang-hiyang-elementary-school') }}">Hiyang-Hiyang Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'martin-a-quiatchon-sr-elementary-school') }}">Martin A. Quiatchon, Sr. Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'paniqui-on-elementary-school') }}">Paniqui-on Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'pedro-e-ramos-elementary-school') }}">Pedro E. Ramos Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'pedro-p-pitogo-elementary-school') }}">Pedro P. Pitogo Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'san-andres-elementary-school') }}">San Andres Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'sewahon-elementary-school') }}">Sewahon Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'sped-training-center') }}">SPED Training Center</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'tiglawigan-elementary-school') }}">Tiglawigan Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12 lg:mb-12" href="{{ route('blog.school', 'villacin-elementary-school') }}">Villacin Elementary School</a>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-half">
          <div class="flex flex-col items-center box mb-4">
            <div class="inline-flex flex-row">
              <div class="inline-flex flex-col">
                <p class="text-left lg:text-xl md:text-xl sm:text-lg text-lg">District II</p>
                @foreach($schools as $school)
                    @if($school->district === 'II' && strpos($school->school_name, 'High School') === false)
                        <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">{{ $school->school_id }}</p>
                    @endif
                @endforeach
                <p class="w-24 lg:text-lg md:text-lg sm:text-base text-base ml-16 mb-4 mt-1">School ID</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117543</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117544</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117545</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117546</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117547</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117548</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117549</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117550</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117551</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117552</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117553</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117554</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117555</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117556</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117557</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117558</p>
              </div>
              <div class="inline-flex flex-col">
                <p class="text-lg ml-12 mb-4 mt-8">School Name</p>
                @foreach($schools as $school)
                    @if($school->district === 'II' && strpos($school->school_name, 'High School') === false)
                        @php
                            $slug_school = str_slug($school->school_name);
                        @endphp
                        <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', $slug_school) }}">{{
                            $school->school_name
                        }}</a>
                    @endif
                @endforeach
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'alingating-elementary-school') }}">Alingating Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'bayabas-elementary-school') }}">Bayabas Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'cabahug-elementary-school') }}">Cabahug Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'cadiz-east-i-elementary-school') }}">Cadiz East I Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'cotcot-elementary-school') }}">Cotcot Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'don-ricardo-jesena-elementary-school') }}">Don Ricardo Jesena Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'escolastica-elementary-school') }}">Escolastica Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'fm-cabras-elementary-school') }}">F.M. Cabras Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'floro-l-reboton-elementary-school') }}">Floro L. Reboton Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'igcamalig-elementary-school') }}">Igcamalig Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'mabini-elementary-school') }}">Mabini Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'manuel-j-escalante-elementary-school') }}">Manuel J. Escalante Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'sangay-elementary-school') }}">Sangay Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'tres-andanas-elementary-school') }}">Tres Andanas Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'v-patricio-elementary-school') }}">V. Patricio Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'yee-on-elementary-school') }}">Yee-on Elementary School</a>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-half">
          <div class="flex flex-col items-center box mb-4">
            <div class="inline-flex flex-row">
              <div class="inline-flex flex-col">
                <p class="text-left lg:text-xl md:text-xl sm:text-lg text-lg">District III</p>
                <p class="lg:text-lg md:text-lg sm:text-base text-base ml-16 mb-4 mt-1">School ID</p>
                @foreach($schools as $school)
                    @if($school->district === 'III' && strpos($school->school_name, 'High School') === false)
                        <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">{{ $school->school_id }}</p>
                    @endif
                @endforeach
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117559</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117560</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117561</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117562</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117563</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117564</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117565</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117566</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117567</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117568</p>
              </div>
              <div class="inline-flex flex-col">
                <p class="text-lg ml-12 mb-4 mt-8">School Name</p>
                @foreach($schools as $school)
                    @if($school->district === 'III' && strpos($school->school_name, 'High School') === false)
                        @php
                            $slug_school = str_slug($school->school_name);
                        @endphp
                        <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', $slug_school) }}">{{
                            $school->school_name
                        }}</a>
                    @endif
                @endforeach
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'andres-bonifacio-elementary-school') }}">Andres Bonifacio Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'balandra-elementary-school') }}">Balandra Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'cadiz-west-i-elementary-school') }}">Cadiz West I Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'daga-elementary-school') }}">Daga Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'don-luis-consing-elementary-school') }}">Don Luis Consing Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'luis-uy-chiat-elementary-school') }}">Luis Uy Chiat Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'egido-fernandez-elementary-school') }}">Egido-Fernandez Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'naga-angela-elementary-school') }}">Naga Angela Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'progreso-elementary-school') }}">Progreso Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'san-rafael-elementary-school') }}">San Rafael Elementary School</a>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-half">
          <div class="flex flex-col items-center box mb-4">
            <div class="inline-flex flex-row">
              <div class="inline-flex flex-col">
                <p class="text-left lg:text-xl md:text-xl sm:text-lg text-lg">District IV</p>
                <p class="lg:text-lg md:text-lg sm:text-base text-base ml-16 mb-4 mt-1">School ID</p>
                @foreach($schools as $school)
                    @if($school->district === 'IV' && strpos($school->school_name, 'High School') === false)
                        <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">{{ $school->school_id }}</p>
                    @endif
                @endforeach
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117569</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117570</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117571</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117572</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117573</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117574</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117575</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117577</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117578</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">117579</p>
              </div>
              <div class="inline-flex flex-col">
                <p class="text-lg ml-12 mb-4 mt-8">School Name</p>
                @foreach($schools as $school)
                    @if($school->district === 'IV' && strpos($school->school_name, 'High School') === false)
                        @php
                            $slug_school = str_slug($school->school_name);
                        @endphp
                        <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', $slug_school) }}">{{
                            $school->school_name
                        }}</a>
                    @endif
                @endforeach
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'aluyan-elementary-school') }}">Aluyan Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'burgos-elementary-school') }}">Burgos Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'cadiz-viejo-elementary-school') }}">Cadiz Viejo Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'cadiz-west-ii-elementary-school') }}">Cadiz West II Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'caduhaan-elementary-school') }}">Caduhaan Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'gen-a-lacson-elementary-school') }}">Gen. A. Lacson Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'hon-pedro-villena-elementary-school') }}">Hon. Pedro Villena Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'mv-gamboa-elementary-school') }}">M.V. Gamboa Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'sombito-elementary-school') }}">Sombito Elementary School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'tagbanon-elementary-school') }}">Tagbanon Elementary School</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h1 class="text-center lg:text-2xl md:text-2xl sm:text-xl text-xl mb-12">Secondary Schools</h1>
      <div class="columns is-centered">
        <div class="column is-7">
          <div class="flex flex-col items-center box mb-4">
            <div class="inline-flex flex-row">
              <div class="inline-flex flex-col">
                <p class="text-left lg:text-xl md:text-xl sm:text-lg text-lg">District IV</p>
                <p class="lg:text-lg md:text-lg sm:text-base text-base ml-16 mb-4 mt-1">School ID</p>
                @foreach($schools as $school)
                    @if($school->district === 'IV' && strpos($school->school_name, 'High School') === true)
                        <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">{{ $school->school_id }}</p>
                    @endif
                @endforeach
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">302726</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">311406</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">302728</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">302729</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">311401</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">311402</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">302730</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">311405</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">311404</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">302731</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">311403</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">302727</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">302732</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">302733</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">302734</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">302735</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">302736</p>
                <p class="lg:text-base md:text-base sm:text-sm text-sm ml-16">302735</p>
              </div>
              <div class="inline-flex flex-col">
                <p class="text-lg ml-12 mb-4 mt-8">School Name</p>
                @foreach($schools as $school)
                    @if($school->district === 'IV' && strpos($school->school_name, 'High School') !== false)
                        @php
                            $slug_school = str_slug($school->school_name);
                        @endphp
                        <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', $slug_school) }}">{{
                            $school->school_name
                        }}</a>
                    @endif
                @endforeach
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'cadiz-viejo-national-high-school') }}">Cadiz Viejo National High School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'burgos-national-high-school') }}">Burgos National High School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'caduha-an-national-high-school') }}">Caduha-an National High School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'cnhs-andres-bonifacio-extension-high-school') }}">CNHS - Andres Bonifacio Extension High School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'cnhs-luna-extension-high-school') }}">CNHS - Luna Extension High School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'cnhs-tagbanon-extension-high-school') }}">CNHS - Tagbanon Extension High School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'dr-vicente-f-gustilo-memorial-national-high-school') }}">Dr. Vicente F. Gustilo Memorial National High School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'banquerohan-national-high-school') }}">Banquerohan National High School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'dvfgmnhs-daga-extension-high-school') }}">DVFGMNHS - Daga Extension High School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'mabini-national-high-school') }}">Mabini National High School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'mnhs-alimatoc-extension-high-school') }}">MNHS - Alimatoc Extension High School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'sicaba-national-high-school') }}">Sicaba National High School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'sped-high-school') }}">SPED High School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'tiglawigan-national-high-school') }}">Tiglawigan National High School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'tnhs-magsaysay-extension-high-school') }}">TNHS - Magsaysay Extension High School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'villacin-national-high-school') }}">Villacin National High School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'jerusalem-national-high-school') }}">Jerusalem National High School</a>
                <a class="lg:text-base md:text-base sm:text-sm text-sm text-grey-darkest hover:underline ml-12" href="{{ route('blog.school', 'vnhs-sewahon-extension-high-school') }}">VNHS - Sewahon Extension High School </a>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
