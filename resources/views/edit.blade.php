@extends('layout')

@section('content')

<style>
    
  .form-group {
      margin-bottom: 0.2rem;
    }
    .form-group label{
      width:25%;
      vertical-align: top;
    }
    .form-control {
      display:inline-block;
      width: 70%;
    }
</style>

<div class="card push-top">
  <div class="card-header">
  Update Item Information
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
        
<form method="post" action="{{ route('applicants.update', $applicant->id) }}" enctype="multipart/form-data">
@csrf
              
  <h2>Course Selections</h2>
  Please begin the selection process by first selecting the study level, year and month when you wish to start your course.
  <div class="form-group">        
    <label for="StudyLevel"><b>Study Level:	 <span class="error">*</span></b></label>
    <select class="form-control" name="StudyLevel"> 
      <option selected>{{ $applicant->StudyLevel }}</option>
      <option value="Undergraduate">Undergraduate</option>
      <option value="Postgraduate">Postgraduate</option>
    </select>
  </div>
  <div class="form-group">
    <label for="CourseStartYear"><b>Course Start Year:	 <span class="error">*</span></b></label>
    <select class="form-control" name="CourseStartYear"> 
    <option selected>{{ $applicant->CourseStartYear }}</option>
      <option value="23/24">2023</option>
      <option value="24/25">2024</option>
      <option value="25/26">2025</option>
      <option value="26/27">2026</option>
      <option value="27/28">2027</option>
      <option value="28/29">2028</option>
      <option value="29/30">2029</option>
    </select>
  </div>
  <div class="form-group">
    <label for="CourseStartMonth"><b>Course Start Month:	 <span class="error">*</span></b></label>
    <select class="form-control" name="CourseStartMonth"> 
      <option selected>{{ $applicant->CourseStartMonth }}</option>
      <option selected="selected" value="September">September</option>
    </select>
  </div>
  <div class="form-group">
    <label for="Course"><b>Course:	 <span class="error">*</span></b></label>
    <select class="form-control" name="Course">        
      <option value="zz">Please Select..</option>
      <option value="B237DPFHQ">Accounting and Finance (Professional Practice) MSc</option>
      <option value="B077DPFHQ">Accounting and Finance MSc</option>
      <option value="T543DPFHQ">Advanced Architectural Design MA</option>
      <option value="T550DPFHQ">Advanced Project Management in Construction MSc</option>
      <option value="S362DPFHQ">Analytical Chemistry MSc</option>
      <option value="T566DPFHQ">Animation Production MA</option>
      <option value="T105DPFHQ">Architecture/Architecture (International) (RIBA Part 2) Master of</option>
      <option value="C416DPFHQ">Artificial Intelligence (with Placement) MSc</option>
      <option value="C365DPFHQ">Artificial Intelligence MSc</option>
      <option value="N326DPFHQ">Automotive Engineering (with Placement) MSc</option>
      <option value="N272DPFHQ">Automotive Engineering MSc</option>
      <option value="B239DPFHQ">Banking and Finance (Professional Practice) MSc</option>
      <option value="M354DPFHQ">Banking and Finance MSc</option>
      <option value="S011DPFHQ">Biomedical and Analytical Science MSc</option>
      <option value="B249DPFHQ">Business Intelligence and Analytics (Professional Practice) MSc</option>
      <option value="B079DPFHQ">Business Intelligence and Analytics MSc</option>
      <option value="S017DPFHQ">Cancer Research MSc</option>
      <option value="D0019DPFHQ">Career Development and Employability MA</option>
      <option value="D0025DPFHQ">Career Development and Employability Postgraduate Diploma</option>
      <option value="M010DPFHQ">Climate Change and Energy Law LLM</option>
      <option value="S416DPFHQ">Clinical Pharmacy Practice with Community Placement MSc</option>
      <option value="S417DPFHQ">Clinical Pharmacy Practice with Hospital Placement MSc</option>
      <option value="S418DPFHQ">Clinical Pharmacy Practice with Research Project MSc</option>
      <option value="H056DPFHQ">Cognition and Neuroscience MSc</option>
      <option value="A485DPFHQ">Composition and Contemporary Creative Practice MMus</option>
      <option value="C412DPFHQ">Computing (with Placement) MSc</option>
      <option value="C366DPFHQ">Computing MSc</option>
      <option value="T568DPFHQ">Contemporary Fine Art MA</option>
      <option value="A416DPFHQ">Creative Music Production MA</option>
      <option value="H027DPFHQ">Criminology and Evidence-Based Policing MSc</option>
      <option value="H021DPFHQ">Criminology and International Security MSc</option>
      <option value="C421DPFHQ">Cyber Security and Digital Forensics (with Placement) MSc</option>
      <option value="C355DPFHQ">Cyber Security and Digital Forensics MSc</option>
      <option value="C419DPFHQ">Data Analytics (with Placement) MSc</option>
      <option value="C364DPFHQ">Data Analytics MSc</option>
      <option value="A372DPFHQ">Digital and Social Media MA</option>
      <option value="B164DPFHQ">Digital Marketing (Professional Practice) MSc</option>
      <option value="B206DPFHQ">Digital Marketing MSc</option>
      <option value="S412DPFHQ">Drug Discovery and Business Strategy MSc</option>
      <option value="B238DPFHQ">Economics (Professional Practice) MSc</option>
      <option value="B368DPFHQ">Economics MSc</option>
      <option value="D061DPFHQ">Education (Early Childhood Studies) MA</option>
      <option value="D0035DPFHQ">Education (Global and International) MA</option>
      <option value="D057DPFHQ">Education (Leadership and Management) MA</option>
      <option value="D056DPFHQ">Education (Mentoring and Coaching) MA</option>
      <option value="D067DPFHQ">Education (Special Educational Needs) MA</option>
      <option value="D062DPFHQ">Education (Teaching and Learning) MA</option>
      <option value="D063DPFHQ">Education (Technology Enhanced Learning) MA</option>
      <option value="D064DPFHQ">Education (Youth and Community) MA</option>
      <option value="N334DPFHQ">Electronic and Automotive Engineering (with Placement) MSc</option>
      <option value="N371DPFHQ">Electronic and Automotive Engineering MSc</option>
      <option value="N336DPFHQ">Electronic and Communication Engineering (with Placement) MSc</option>
      <option value="N276DPFHQ">Electronic and Communication Engineering MSc</option>
      <option value="N329DPFHQ">Electronic Engineering (with Placement) MSc</option>
      <option value="N370DPFHQ">Electronic Engineering MSc</option>
      <option value="N331DPFHQ">Engineering Control Systems and Instrumentation (with Placement) MSc</option>
      <option value="N315DPFHQ">Engineering Control Systems and Instrumentation MSc</option>
      <option value="N330DPFHQ">Engineering Management (with Placement) MSc</option>
      <option value="N314DPFHQ">Engineering Management MSc</option>
      <option value="A043DPFHQ">English Literature MA</option>
      <option value="S019DPFHQ">Environmental Monitoring and Modelling MSc</option>
      <option value="T538DPFHQ">Fashion Design MA</option>
      <option value="T536DPFHQ">Fashion Marketing MA</option>
      <option value="B243DPFHQ">Finance (Professional Practice) MSc</option>
      <option value="M356DPFHQ">Finance MSc</option>
      <option value="B250DPFHQ">Fintech (Professional Practice) MSc</option>
      <option value="B080DPFHQ">Fintech MSc</option>
      <option value="S300DPFHQ">Forensic Science (Forensic Biology) MSc</option>
      <option value="S251DPFHQ">Forensic Science (Forensic Chemistry) MSc</option>
      <option value="T507DPFHQ">Graphic Design MA</option>
      <option value="D347DPFHQ">Higher Education MA</option>
      <option value="A371DPFHQ">Holocaust and Genocide Studies MA</option>
      <option value="T570DPFHQ">Illustration MA</option>
      <option value="C413DPFHQ">Information Systems Management (with Placement) MSc</option>
      <option value="C404DPFHQ">Information Systems Management MSc</option>
      <option value="T562DPFHQ">Interior Design MA</option>
      <option value="B061DPFHQ">International Business (Professional Practice) MSc</option>
      <option value="M187DPFHQ">International Business Law LLM</option>
      <option value="B067DPFHQ">International Business MSc</option>
      <option value="B098DPFHQ">International Business with Entrepreneurship (Professional Practice) MSc</option>
      <option value="B069DPFHQ">International Business with Entrepreneurship MSc</option>
      <option value="B099DPFHQ">International Business with Humanitarian Challenges (Professional Practice) MSc</option>
      <option value="B071DPFHQ">International Business with Humanitarian Challenges MSc</option>
      <option value="B162DPFHQ">International Business with Marketing (Professional Practice) MSc</option>
      <option value="B072DPFHQ">International Business with Marketing MSc</option>
      <option value="B163DPFHQ">International Business with Project Management (Professional Practice) MSc</option>
      <option value="B073DPFHQ">International Business with Project Management MSc</option>
      <option value="B063DPFHQ">International Business with Tourism and Hospitality (Professional Practice) MSc</option>
      <option value="B070DPFHQ">International Business with Tourism and Hospitality MSc</option>
      <option value="M006DPFHQ">International Corporate and Commercial Law LLM</option>
      <option value="M008DPFHQ">International Criminal Law LLM</option>
      <option value="M009DPFHQ">International Environmental Law LLM</option>
      <option value="M007DPFHQ">International Human Rights Law LLM</option>
      <option value="M167DPFHQ">International Law LLM</option>
      <option value="H229DPFHQ">Investigative Psychology MSc</option>
      <option value="B236DPFHQ">Leadership, Communication and Humanitarian Challenges (Professional Practice) MSc</option>
      <option value="B084DPFHQ">Leadership, Communication and Humanitarian Challenges MSc</option>
      <option value="X371DPFHQ">Lifelong Learning PGCE pre-service</option>
      <option value="B232DPFHQ">Logistics and Supply Chain Management (Professional Practice) MSc</option>
      <option value="B384DPFHQ">Logistics and Supply Chain Management MSc</option>
      <option value="B251DPFHQ">Management (Professional Practice) MSc</option>
      <option value="B040DPFHQ">Management MSc</option>
      <option value="B258DPFHQ">Management with Communication (Professional Practice) MSc</option>
      <option value="B056DPFHQ">Management with Communication MSc</option>
      <option value="B253DPFHQ">Management with Entrepreneurship (Professional Practice) MSc</option>
      <option value="B047DPFHQ">Management with Entrepreneurship MSc</option>
      <option value="B256DPFHQ">Management with Human Resource Management (Professional Practice) MSc</option>
      <option value="B052DPFHQ">Management with Human Resource Management MSc</option>
      <option value="B254DPFHQ">Management with International Business (Professional Practice) MSc</option>
      <option value="B048DPFHQ">Management with International Business MSc</option>
      <option value="B259DPFHQ">Management with Leadership (Professional Practice) MSc</option>
      <option value="B051DPFHQ">Management with Leadership MSc</option>
      <option value="B252DPFHQ">Management with Marketing (Professional Practice) MSc</option>
      <option value="B019DPFHQ">Management with Marketing MSc</option>
      <option value="B255DPFHQ">Management with Tourism and Hospitality (Professional Practice) MSc</option>
      <option value="B050DPFHQ">Management with Tourism and Hospitality MSc</option>
      <option value="B064DPFHQ">Marketing (Professional Practice) MSc</option>
      <option value="B201DPFHQ">Marketing MSc</option>
      <option value="B165DPFHQ">Marketing with Brand Management (Professional Practice) MSc</option>
      <option value="B065DPFHQ">Marketing with Brand Management MSc</option>
      <option value="M220DPFHQ">Master of Business Administration (MBA)</option>
      <option value="H256DPFHQ">Master of Public Health</option>
      <option value="H259DPFHQ">Master of Public Health (Advanced Practitioner)</option>
      <option value="H063DPFHQ">Master of Public Health (Global)</option>
      <option value="H061DPFHQ">Master of Public Health (Global) Advanced Practitioner</option>
      <option value="N325DPFHQ">Mechanical Engineering (with Placement) MSc</option>
      <option value="N311DPFHQ">Mechanical Engineering MSc</option>
      <option value="A440DPFHQ">Music Performance MMus</option>
      <option value="C352DPFHQ">Music Technology and Sound Production MSc</option>
      <option value="A442DPFHQ">Musicology MMus</option>
      <option value="N353DPFHQ">Oil and Gas Engineering MSc</option>
      <option value="S431DPFHQ">Pharmaceutical and Analytical Science MSc</option>
      <option value="S415DPFHQ">Pharmaceutical Formulation and Business Strategy MSc</option>
      <option value="T572DPFHQ">Photography MA</option>
      <option value="H592DPFHQ">Podiatry MSc</option>
      <option value="A457DPFHQ">Popular Music Practice MMus</option>
      <option value="X105DPFHQ">Primary and Early Years Education PGCE with QTS</option>
      <option value="T564DPFHQ">Product Design MA</option>
      <option value="T307DPFHQ">Product Innovation with Textiles MSc</option>
      <option value="B231DPFHQ">Project Management and Operations Management (Professional Practice) MSc</option>
      <option value="B076DPFHQ">Project Management and Operations Management MSc</option>
      <option value="H231DPFHQ">Psychology MSc</option>
      <option value="H306DPFHQ">Social Work MSc</option>
      <option value="L501DUFHQ">Social Work MSc</option>
      <option value="H238DPFHQ">Sport and Exercise Nutrition MSc</option>
      <option value="B233DPFHQ">Strategic Communication and Leadership (Professional Practice) MSc</option>
      <option value="B081DPFHQ">Strategic Communication and Leadership MSc</option>
      <option value="B234DPFHQ">Strategic Communication, Leadership and Sustainability (Professional Practice) MSc</option>
      <option value="B082DPFHQ">Strategic Communication, Leadership and Sustainability MSc</option>
      <option value="B424DPFHQ">Strategic People Management (Professional Practice) MSc</option>
      <option value="M396DPFHQ">Strategic People Management MSc</option>
      <option value="B200DPFHQ">Supply Chain Management with Humanitarian Challenges (Professional Practice) MSc</option>
      <option value="B075DPFHQ">Supply Chain Management with Humanitarian Challenges MSc</option>
      <option value="B235DPFHQ">Sustainable Business Leadership (Professional Practice) MSc</option>
      <option value="B083DPFHQ">Sustainable Business Leadership MSc</option>
      <option value="B199DPFHQ">Sustainable Supply Chain Management (Professional Practice) MSc</option>
      <option value="B074DPFHQ">Sustainable Supply Chain Management MSc</option>
      <option value="D0031DPFHQ">Teaching English to Speakers of Other Languages (TESOL) (with Placement) MA</option>
      <option value="D172DPFHQ">Teaching English to Speakers of Other Languages MA</option>
      <option value="T513DPFHQ">Textiles MA</option>
      <option value="H213DPFHQ">Theory of Podiatric Surgery MSc</option>
    </select>
  </div>
<h2>Personal Information</h2>
<div class="row"> 
  <div class="col-6">
    <div class="form-group">
      <label for="title"><b>Title <span class="error">*</span></b></label>
      <select class="form-control" name="title">              
        <option selected>{{ $applicant->title }}</option>
        <option value="Mr">Mr</option>
        <option value="Miss">Miss</option>
        <option value="Mrs">Mrs</option>
        <option value="Ms">Ms</option>
        <option value="Mx">Mx</option>
        <option value="Dr">Dr</option>
        <option value="Professor">Professor</option>
        <option value="Other">Other</option>
        <option value="Refused">Refused</option>
      </select>
    </div>
  <div class="form-group">
  
    <label for="forename1"><b>Forename 1</b></label>
    <input type="text" class="form-control" name="forename1" value="{{ $applicant->forename1 }}"/>
  </div>
  <div class="form-group">
    <label for="forename2"><b>Forename 2</b></label>
    <input type="text" class="form-control" name="forename2" value="{{ $applicant->forename2 }}"/>
  </div>
  <div class="form-group">
    <label for="familyname"><b>Family Name</b></label>
    <input type="text" class="form-control" name="familyname" value="{{ $applicant->familyname }}"/>
  </div>
  <div class="form-group">
    <label for="previousname"><b>Previous Name (if any)</b></label>
    <input type="text" class="form-control" name="previousname" value="{{ $applicant->previousname }}"/>
  </div>
  <div class="form-group">
    <label for="dateofbirth"><b>Date of Birth</b></label>
    <input type="text" class="form-control" name="dateofbirth" value="{{ $applicant->dateofbirth }}"/>
  </div>
  <div class="form-group">
    <label for="gender"><b>Gender</b></label>
    <select class="form-control" name="gender">              
    <option selected>{{ $applicant->gender }}</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select>
  </div>
  <div class="form-group">
    <label for="ethinicorigin"><b>Ethnic Origin</b></label>
    <select class="form-control" name="ethinicorigin">  
    <option selected>{{ $applicant->ethinicorigin }}</option>
    <option value="Any other Asian background">Any other Asian background</option>
    <option value="Any other Black background">Any other Black background</option>
    <option value="Any other ethnic background">Any other ethnic background</option>
    <option value="Any other Mixed or Multiple ethnic background">Any other Mixed or Multiple ethnic background</option>
    <option value="Any other White background">Any other White background</option>
    <option value="Arab">Arab</option>
    <option value="Asian - Bangladeshi or Bangladeshi British">Asian - Bangladeshi or Bangladeshi British</option>
    <option value="Asian - Chinese or Chinese British">Asian - Chinese or Chinese British</option>
    <option value="Asian - Indian or Indian British">Asian - Indian or Indian British</option>
    <option value="Asian - Pakistani or Pakistani British">Asian - Pakistani or Pakistani British</option>
    <option value="Black - African or African British">Black - African or African British</option>
    <option value="Black - Caribbean or Caribbean British">Black - Caribbean or Caribbean British</option>
    <option value="Mixed or multiple ethnic groups - White or White British and Asian or Asian British">Mixed or multiple ethnic groups - White or White British and Asian or Asian British</option>
    <option value="Mixed or multiple ethnic groups - White or White British and Black African or Black African British">Mixed or multiple ethnic groups - White or White British and Black African or Black African British</option>
    <option value="Mixed or multiple ethnic groups - White or White British and Black Caribbean or Black Caribbean British">Mixed or multiple ethnic groups - White or White British and Black Caribbean or Black Caribbean British</option>
    <option value="Prefer not to say">Prefer not to say</option>
    <option value="White - English, Scottish, Welsh, Northern Irish or British">White - English, Scottish, Welsh, Northern Irish or British</option>
    <option value="White - Gypsy or Irish Traveller">White - Gypsy or Irish Traveller</option>
    <option value="White - Irish">White - Irish</option>
    <option value="White - Roma">White - Roma</option>
    </select>
  </div>
  <div class="form-group">
    <label for="nationality"><b>Nationality</b></label>
    <select class="form-control" name="nationality"> 
      <option selected>{{ $applicant->nationality }}</option>
      <option value="Afghan">Afghan</option>
      <option value="Åland Island">Åland Island</option>
      <option value="Albanian">Albanian</option>
      <option value="Algerian">Algerian</option>
      <option value="American Samoan">American Samoan</option>
      <option value="Andorran">Andorran</option>
      <option value="Angolan">Angolan</option>
      <option value="Anguillan">Anguillan</option>
      <option value="Antarctic">Antarctic</option>
      <option value="Antiguan or Barbudan">Antiguan or Barbudan</option>
      <option value="Argentine">Argentine</option>
      <option value="Armenian">Armenian</option>
      <option value="Aruban">Aruban</option>
      <option value="Australian">Australian</option>
      <option value="Austrian">Austrian</option>
      <option value="Azerbaijani, Azeri">Azerbaijani, Azeri</option>
      <option value="Bahamian">Bahamian</option>
      <option value="Bahraini">Bahraini</option>
      <option value="Bangladeshi">Bangladeshi</option>
      <option value="Barbadian">Barbadian</option>
      <option value="Belarusian">Belarusian</option>
      <option value="Belgian">Belgian</option>
      <option value="Belizean">Belizean</option>
      <option value="Beninese, Beninois">Beninese, Beninois</option>
      <option value="Bermudian, Bermudan">Bermudian, Bermudan</option>
      <option value="Bhutanese">Bhutanese</option>
      <option value="Bolivian">Bolivian</option>
      <option value="Bonaire">Bonaire</option>
      <option value="Bosnian or Herzegovinian">Bosnian or Herzegovinian</option>
      <option value="Motswana, Botswanan">Motswana, Botswanan</option>
      <option value="Bouvet Island">Bouvet Island</option>
      <option value="Brazilian">Brazilian</option>
      <option value="BIOT">BIOT</option>
      <option value="Bruneian">Bruneian</option>
      <option value="Bulgarian">Bulgarian</option>
      <option value="BurkinabÃ©">BurkinabÃ©</option>
      <option value="Burundian">Burundian</option>
      <option value="Cabo Verdean">Cabo Verdean</option>
      <option value="Cambodian">Cambodian</option>
      <option value="Cameroonian">Cameroonian</option>
      <option value="Canadian">Canadian</option>
      <option value="Caymanian">Caymanian</option>
      <option value="Central African">Central African</option>
      <option value="Chadian">Chadian</option>
      <option value="Chilean">Chilean</option>
      <option value="Chinese">Chinese</option>
      <option value="Christmas Island">Christmas Island</option>
      <option value="Cocos Island">Cocos Island</option>
      <option value="Colombian">Colombian</option>
      <option value="Comoran, Comorian">Comoran, Comorian</option>
      <option value="Congolese">Congolese</option>
      <option value="Congolese">Congolese</option>
      <option value="Cook Island">Cook Island</option>
      <option value="Costa Rican">Costa Rican</option>
      <option value="Ivorian">Ivorian</option>
      <option value="Croatian">Croatian</option>
      <option value="Cuban">Cuban</option>
      <option value="CuraÃ§aoan">CuraÃ§aoan</option>
      <option value="Cypriot">Cypriot</option>
      <option value="Czech">Czech</option>
      <option value="Danish">Danish</option>
      <option value="Djiboutian">Djiboutian</option>
      <option value="Dominican">Dominican</option>
      <option value="Dominican">Dominican</option>
      <option value="Ecuadorian">Ecuadorian</option>
      <option value="Egyptian">Egyptian</option>
      <option value="Salvadoran">Salvadoran</option>
      <option value="Equatorial Guinean, Equatoguinean">Equatorial Guinean, Equatoguinean</option>
      <option value="Eritrean">Eritrean</option>
      <option value="Estonian">Estonian</option>
      <option value="Ethiopian">Ethiopian</option>
      <option value="Falkland Island">Falkland Island</option>
      <option value="Faroese">Faroese</option>
      <option value="Fijian">Fijian</option>
      <option value="Finnish">Finnish</option>
      <option value="French">French</option>
      <option value="French Guianese">French Guianese</option>
      <option value="French Polynesian">French Polynesian</option>
      <option value="French Southern Territories">French Southern Territories</option>
      <option value="Gabonese">Gabonese</option>
      <option value="Gambian">Gambian</option>
      <option value="Georgian">Georgian</option>
      <option value="German">German</option>
      <option value="Ghanaian">Ghanaian</option>
      <option value="Gibraltar">Gibraltar</option>
      <option value="Greek, Hellenic">Greek, Hellenic</option>
      <option value="Greenlandic">Greenlandic</option>
      <option value="Grenadian">Grenadian</option>
      <option value="Guadeloupe">Guadeloupe</option>
      <option value="Guamanian, Guambat">Guamanian, Guambat</option>
      <option value="Guatemalan">Guatemalan</option>
      <option value="Channel Island">Channel Island</option>
      <option value="Guinean">Guinean</option>
      <option value="Bissau-Guinean">Bissau-Guinean</option>
      <option value="Guyanese">Guyanese</option>
      <option value="Haitian">Haitian</option>
      <option value="Heard Island or McDonald Islands">Heard Island or McDonald Islands</option>
      <option value="Vatican">Vatican</option>
      <option value="Honduran">Honduran</option>
      <option value="Hong Kong, Hong Kongese">Hong Kong, Hong Kongese</option>
      <option value="Hungarian, Magyar">Hungarian, Magyar</option>
      <option value="Icelandic">Icelandic</option>
      <option value="Indian">Indian</option>
      <option value="Indonesian">Indonesian</option>
      <option value="Iranian, Persian">Iranian, Persian</option>
      <option value="Iraqi">Iraqi</option>
      <option value="Irish">Irish</option>
      <option value="Manx">Manx</option>
      <option value="Israeli">Israeli</option>
      <option value="Italian">Italian</option>
      <option value="Jamaican">Jamaican</option>
      <option value="Japanese">Japanese</option>
      <option value="Channel Island">Channel Island</option>
      <option value="Jordanian">Jordanian</option>
      <option value="Kazakhstani, Kazakh">Kazakhstani, Kazakh</option>
      <option value="Kenyan">Kenyan</option>
      <option value="I-Kiribati">I-Kiribati</option>
      <option value="North Korean">North Korean</option>
      <option value="South Korean">South Korean</option>
      <option value="Kuwaiti">Kuwaiti</option>
      <option value="Kyrgyzstani, Kyrgyz, Kirgiz, Kirghiz">Kyrgyzstani, Kyrgyz, Kirgiz, Kirghiz</option>
      <option value="Lao, Laotian">Lao, Laotian</option>
      <option value="Latvian">Latvian</option>
      <option value="Lebanese">Lebanese</option>
      <option value="Basotho">Basotho</option>
      <option value="Liberian">Liberian</option>
      <option value="Libyan">Libyan</option>
      <option value="Liechtenstein">Liechtenstein</option>
      <option value="Lithuanian">Lithuanian</option>
      <option value="Luxembourg, Luxembourgish">Luxembourg, Luxembourgish</option>
      <option value="Macanese, Chinese">Macanese, Chinese</option>
      <option value="Macedonian">Macedonian</option>
      <option value="Malagasy">Malagasy</option>
      <option value="Malawian">Malawian</option>
      <option value="Malaysian">Malaysian</option>
      <option value="Maldivian">Maldivian</option>
      <option value="Malian, Malinese">Malian, Malinese</option>
      <option value="Maltese">Maltese</option>
      <option value="Marshallese">Marshallese</option>
      <option value="Martiniquais, Martinican">Martiniquais, Martinican</option>
      <option value="Mauritanian">Mauritanian</option>
      <option value="Mauritian">Mauritian</option>
      <option value="Mahoran">Mahoran</option>
      <option value="Mexican">Mexican</option>
      <option value="Micronesian">Micronesian</option>
      <option value="Moldovan">Moldovan</option>
      <option value="MonÃ©gasque, Monacan">MonÃ©gasque, Monacan</option>
      <option value="Mongolian">Mongolian</option>
      <option value="Montenegrin">Montenegrin</option>
      <option value="Montserratian">Montserratian</option>
      <option value="Moroccan">Moroccan</option>
      <option value="Mozambican">Mozambican</option>
      <option value="Burmese">Burmese</option>
      <option value="Namibian">Namibian</option>
      <option value="Nauruan">Nauruan</option>
      <option value="Nepali, Nepalese">Nepali, Nepalese</option>
      <option value="Dutch, Netherlandic">Dutch, Netherlandic</option>
      <option value="New Caledonian">New Caledonian</option>
      <option value="New Zealand, NZ">New Zealand, NZ</option>
      <option value="Nicaraguan">Nicaraguan</option>
      <option value="Nigerien">Nigerien</option>
      <option value="Nigerian">Nigerian</option>
      <option value="Niuean">Niuean</option>
      <option value="Norfolk Island">Norfolk Island</option>
      <option value="Northern Marianan">Northern Marianan</option>
      <option value="Norwegian">Norwegian</option>
      <option value="Omani">Omani</option>
      <option value="Pakistani">Pakistani</option>
      <option value="Palauan">Palauan</option>
      <option value="Palestinian">Palestinian</option>
      <option value="Panamanian">Panamanian</option>
      <option value="Papua New Guinean, Papuan">Papua New Guinean, Papuan</option>
      <option value="Paraguayan">Paraguayan</option>
      <option value="Peruvian">Peruvian</option>
      <option value="Philippine, Filipino">Philippine, Filipino</option>
      <option value="Pitcairn Island">Pitcairn Island</option>
      <option value="Polish">Polish</option>
      <option value="Portuguese">Portuguese</option>
      <option value="Puerto Rican">Puerto Rican</option>
      <option value="Qatari">Qatari</option>
      <option value="RÃ©unionese, RÃ©unionnais">RÃ©unionese, RÃ©unionnais</option>
      <option value="Romanian">Romanian</option>
      <option value="Russian">Russian</option>
      <option value="Rwandan">Rwandan</option>
      <option value="BarthÃ©lemois">BarthÃ©lemois</option>
      <option value="Saint Helenian">Saint Helenian</option>
      <option value="Kittitian or Nevisian">Kittitian or Nevisian</option>
      <option value="Saint Lucian">Saint Lucian</option>
      <option value="Saint-Martinoise">Saint-Martinoise</option>
      <option value="Saint-Pierrais or Miquelonnais">Saint-Pierrais or Miquelonnais</option>
      <option value="Saint Vincentian, Vincentian">Saint Vincentian, Vincentian</option>
      <option value="Samoan">Samoan</option>
      <option value="Sammarinese">Sammarinese</option>
      <option value="SÃ£o TomÃ©an">SÃ£o TomÃ©an</option>
      <option value="Saudi, Saudi Arabian">Saudi, Saudi Arabian</option>
      <option value="Senegalese">Senegalese</option>
      <option value="Serbian">Serbian</option>
      <option value="Seychellois">Seychellois</option>
      <option value="Sierra Leonean">Sierra Leonean</option>
      <option value="Singaporean">Singaporean</option>
      <option value="Sint Maarten">Sint Maarten</option>
      <option value="Slovak">Slovak</option>
      <option value="Slovenian, Slovene">Slovenian, Slovene</option>
      <option value="Solomon Island">Solomon Island</option>
      <option value="Somali, Somalian">Somali, Somalian</option>
      <option value="South African">South African</option>
      <option value="South Georgia or South Sandwich Islands">South Georgia or South Sandwich Islands</option>
      <option value="South Sudanese">South Sudanese</option>
      <option value="Spanish">Spanish</option>
      <option value="Sri Lankan">Sri Lankan</option>
      <option value="Sudanese">Sudanese</option>
      <option value="Surinamese">Surinamese</option>
      <option value="Svalbard">Svalbard</option>
      <option value="Swazi">Swazi</option>
      <option value="Swedish">Swedish</option>
      <option value="Swiss">Swiss</option>
      <option value="Syrian">Syrian</option>
      <option value="Chinese, Taiwanese">Chinese, Taiwanese</option>
      <option value="Tajikistani">Tajikistani</option>
      <option value="Tanzanian">Tanzanian</option>
      <option value="Thai">Thai</option>
      <option value="Timorese">Timorese</option>
      <option value="Togolese">Togolese</option>
      <option value="Tokelauan">Tokelauan</option>
      <option value="Tongan">Tongan</option>
      <option value="Trinidadian or Tobagonian">Trinidadian or Tobagonian</option>
      <option value="Tunisian">Tunisian</option>
      <option value="Turkish">Turkish</option>
      <option value="Turkmen">Turkmen</option>
      <option value="Turks and Caicos Island">Turks and Caicos Island</option>
      <option value="Tuvaluan">Tuvaluan</option>
      <option value="Ugandan">Ugandan</option>
      <option value="Ukrainian">Ukrainian</option>
      <option value="Emirati, Emirian, Emiri">Emirati, Emirian, Emiri</option>
      <option value="British, UK">British, UK</option>
      <option value="American">American</option>
      <option value="American">American</option>
      <option value="Uruguayan">Uruguayan</option>
      <option value="Uzbekistani, Uzbek">Uzbekistani, Uzbek</option>
      <option value="Ni-Vanuatu, Vanuatuan">Ni-Vanuatu, Vanuatuan</option>
      <option value="Venezuelan">Venezuelan</option>
      <option value="Vietnamese">Vietnamese</option>
      <option value="British Virgin Island">British Virgin Island</option>
      <option value="U.S. Virgin Island">U.S. Virgin Island</option>
      <option value="Wallis and Futuna, Wallisian or Futunan">Wallis and Futuna, Wallisian or Futunan</option>
      <option value="Sahrawi, Sahrawian, Sahraouian">Sahrawi, Sahrawian, Sahraouian</option>
      <option value="Yemeni">Yemeni</option>
      <option value="Zambian">Zambian</option>
      <option value="Zimbabwean">Zimbabwean</option>
    </select>
  </div>
  <div class="form-group">
    <label for="countryofbirth"><b>Country of Birth</b></label>
    <select class="form-control" name="countryofbirth"> 
      <option selected>{{ $applicant->countryofbirth }}</option>    
      <option value="Afghanistan">Afghanistan</option>
      <option value="Åland Islands">Åland Islands</option>
      <option value="Albania">Albania</option>
      <option value="Algeria">Algeria</option>
      <option value="American Samoa">American Samoa</option>
      <option value="Andorra">Andorra</option>
      <option value="Angola">Angola</option>
      <option value="Anguilla">Anguilla</option>
      <option value="Antarctica">Antarctica</option>
      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
      <option value="Argentina">Argentina</option>
      <option value="Armenia">Armenia</option>
      <option value="Aruba">Aruba</option>
      <option value="Australia">Australia</option>
      <option value="Austria">Austria</option>
      <option value="Azerbaijan">Azerbaijan</option>
      <option value="Bahamas">Bahamas</option>
      <option value="Bahrain">Bahrain</option>
      <option value="Bangladesh">Bangladesh</option>
      <option value="Barbados">Barbados</option>
      <option value="Belarus">Belarus</option>
      <option value="Belgium">Belgium</option>
      <option value="Belize">Belize</option>
      <option value="Benin">Benin</option>
      <option value="Bermuda">Bermuda</option>
      <option value="Bhutan">Bhutan</option>
      <option value="Bolivia (Plurinational State of)">Bolivia (Plurinational State of)</option>
      <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
      <option value="Botswana">Botswana</option>
      <option value="Bouvet Island">Bouvet Island</option>
      <option value="Brazil">Brazil</option>
      <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
      <option value="Brunei Darussalam">Brunei Darussalam</option>
      <option value="Bulgaria">Bulgaria</option>
      <option value="Burkina Faso">Burkina Faso</option>
      <option value="Burundi">Burundi</option>
      <option value="Cabo Verde">Cabo Verde</option>
      <option value="Cambodia">Cambodia</option>
      <option value="Cameroon">Cameroon</option>
      <option value="Canada">Canada</option>
      <option value="Cayman Islands">Cayman Islands</option>
      <option value="Central African Republic">Central African Republic</option>
      <option value="Chad">Chad</option>
      <option value="Chile">Chile</option>
      <option value="China">China</option>
      <option value="Christmas Island">Christmas Island</option>
      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
      <option value="Colombia">Colombia</option>
      <option value="Comoros">Comoros</option>
      <option value="Congo (Republic of the)">Congo (Republic of the)</option>
      <option value="Congo (Democratic Republic of the)">Congo (Democratic Republic of the)</option>
      <option value="Cook Islands">Cook Islands</option>
      <option value="Costa Rica">Costa Rica</option>
      <option value="CÃ´te d'Ivoire">CÃ´te d'Ivoire</option>
      <option value="Croatia">Croatia</option>
      <option value="Cuba">Cuba</option>
      <option value="CuraÃ§ao">CuraÃ§ao</option>
      <option value="Cyprus">Cyprus</option>
      <option value="Czech Republic">Czech Republic</option>
      <option value="Denmark">Denmark</option>
      <option value="Djibouti">Djibouti</option>
      <option value="Dominica">Dominica</option>
      <option value="Dominican Republic">Dominican Republic</option>
      <option value="Ecuador">Ecuador</option>
      <option value="Egypt">Egypt</option>
      <option value="El Salvador">El Salvador</option>
      <option value="Equatorial Guinea">Equatorial Guinea</option>
      <option value="Eritrea">Eritrea</option>
      <option value="Estonia">Estonia</option>
      <option value="Ethiopia">Ethiopia</option>
      <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
      <option value="Faroe Islands">Faroe Islands</option>
      <option value="Fiji">Fiji</option>
      <option value="Finland">Finland</option>
      <option value="France">France</option>
      <option value="French Guiana">French Guiana</option>
      <option value="French Polynesia">French Polynesia</option>
      <option value="French Southern Territories">French Southern Territories</option>
      <option value="Gabon">Gabon</option>
      <option value="Gambia">Gambia</option>
      <option value="Georgia">Georgia</option>
      <option value="Germany">Germany</option>
      <option value="Ghana">Ghana</option>
      <option value="Gibraltar">Gibraltar</option>
      <option value="Greece">Greece</option>
      <option value="Greenland">Greenland</option>
      <option value="Grenada">Grenada</option>
      <option value="Guadeloupe">Guadeloupe</option>
      <option value="Guam">Guam</option>
      <option value="Guatemala">Guatemala</option>
      <option value="Guernsey">Guernsey</option>
      <option value="Guinea">Guinea</option>
      <option value="Guinea-Bissau">Guinea-Bissau</option>
      <option value="Guyana">Guyana</option>
      <option value="Haiti">Haiti</option>
      <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
      <option value="Vatican City State">Vatican City State</option>
      <option value="Honduras">Honduras</option>
      <option value="Hong Kong">Hong Kong</option>
      <option value="Hungary">Hungary</option>
      <option value="Iceland">Iceland</option>
      <option value="India">India</option>
      <option value="Indonesia">Indonesia</option>
      <option value="Iran">Iran</option>
      <option value="Iraq">Iraq</option>
      <option value="Ireland">Ireland</option>
      <option value="Isle of Man">Isle of Man</option>
      <option value="Israel">Israel</option>
      <option value="Italy">Italy</option>
      <option value="Jamaica">Jamaica</option>
      <option value="Japan">Japan</option>
      <option value="Jersey">Jersey</option>
      <option value="Jordan">Jordan</option>
      <option value="Kazakhstan">Kazakhstan</option>
      <option value="Kenya">Kenya</option>
      <option value="Kiribati">Kiribati</option>
      <option value="Korea (Democratic People's Republic of)">Korea (Democratic People's Republic of)</option>
      <option value="Korea (Republic of)">Korea (Republic of)</option>
      <option value="Kuwait">Kuwait</option>
      <option value="Kyrgyzstan">Kyrgyzstan</option>
      <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
      <option value="Latvia">Latvia</option>
      <option value="Lebanon">Lebanon</option>
      <option value="Lesotho">Lesotho</option>
      <option value="Liberia">Liberia</option>
      <option value="Libya">Libya</option>
      <option value="Liechtenstein">Liechtenstein</option>
      <option value="Lithuania">Lithuania</option>
      <option value="Luxembourg">Luxembourg</option>
      <option value="Macao">Macao</option>
      <option value="Macedonia (the former Yugoslav Republic of)">Macedonia (the former Yugoslav Republic of)</option>
      <option value="Madagascar">Madagascar</option>
      <option value="Malawi">Malawi</option>
      <option value="Malaysia">Malaysia</option>
      <option value="Maldives">Maldives</option>
      <option value="Mali">Mali</option>
      <option value="Malta">Malta</option>
      <option value="Marshall Islands">Marshall Islands</option>
      <option value="Martinique">Martinique</option>
      <option value="Mauritania">Mauritania</option>
      <option value="Mauritius">Mauritius</option>
      <option value="Mayotte">Mayotte</option>
      <option value="Mexico">Mexico</option>
      <option value="Micronesia (Federated States of)">Micronesia (Federated States of)</option>
      <option value="Moldova (Republic of)">Moldova (Republic of)</option>
      <option value="Monaco">Monaco</option>
      <option value="Mongolia">Mongolia</option>
      <option value="Montenegro">Montenegro</option>
      <option value="Montserrat">Montserrat</option>
      <option value="Morocco">Morocco</option>
      <option value="Mozambique">Mozambique</option>
      <option value="Myanmar">Myanmar</option>
      <option value="Namibia">Namibia</option>
      <option value="Nauru">Nauru</option>
      <option value="Nepal">Nepal</option>
      <option value="Netherlands">Netherlands</option>
      <option value="New Caledonia">New Caledonia</option>
      <option value="New Zealand">New Zealand</option>
      <option value="Nicaragua">Nicaragua</option>
      <option value="Niger">Niger</option>
      <option value="Nigeria">Nigeria</option>
      <option value="Niue">Niue</option>
      <option value="Norfolk Island">Norfolk Island</option>
      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
      <option value="Norway">Norway</option>
      <option value="Oman">Oman</option>
      <option value="Pakistan">Pakistan</option>
      <option value="Palau">Palau</option>
      <option value="Palestine, State of">Palestine, State of</option>
      <option value="Panama">Panama</option>
      <option value="Papua New Guinea">Papua New Guinea</option>
      <option value="Paraguay">Paraguay</option>
      <option value="Peru">Peru</option>
      <option value="Philippines">Philippines</option>
      <option value="Pitcairn">Pitcairn</option>
      <option value="Poland">Poland</option>
      <option value="Portugal">Portugal</option>
      <option value="Puerto Rico">Puerto Rico</option>
      <option value="Qatar">Qatar</option>
      <option value="RÃ©union">RÃ©union</option>
      <option value="Romania">Romania</option>
      <option value="Russian Federation">Russian Federation</option>
      <option value="Rwanda">Rwanda</option>
      <option value="Saint BarthÃ©lemy">Saint BarthÃ©lemy</option>
      <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
      <option value="Saint Lucia">Saint Lucia</option>
      <option value="Saint Martin (French part)">Saint Martin (French part)</option>
      <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
      <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
      <option value="Samoa">Samoa</option>
      <option value="San Marino">San Marino</option>
      <option value="Sao Tome and Principe">Sao Tome and Principe</option>
      <option value="Saudi Arabia">Saudi Arabia</option>
      <option value="Senegal">Senegal</option>
      <option value="Serbia">Serbia</option>
      <option value="Seychelles">Seychelles</option>
      <option value="Sierra Leone">Sierra Leone</option>
      <option value="Singapore">Singapore</option>
      <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
      <option value="Slovakia">Slovakia</option>
      <option value="Slovenia">Slovenia</option>
      <option value="Solomon Islands">Solomon Islands</option>
      <option value="Somalia">Somalia</option>
      <option value="South Africa">South Africa</option>
      <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
      <option value="South Sudan">South Sudan</option>
      <option value="Spain">Spain</option>
      <option value="Sri Lanka">Sri Lanka</option>
      <option value="Sudan">Sudan</option>
      <option value="Suriname">Suriname</option>
      <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
      <option value="Swaziland">Swaziland</option>
      <option value="Sweden">Sweden</option>
      <option value="Switzerland">Switzerland</option>
      <option value="Syrian Arab Republic">Syrian Arab Republic</option>
      <option value="Taiwan, Province of China">Taiwan, Province of China</option>
      <option value="Tajikistan">Tajikistan</option>
      <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
      <option value="Thailand">Thailand</option>
      <option value="Timor-Leste">Timor-Leste</option>
      <option value="Togo">Togo</option>
      <option value="Tokelau">Tokelau</option>
      <option value="Tonga">Tonga</option>
      <option value="Trinidad and Tobago">Trinidad and Tobago</option>
      <option value="Tunisia">Tunisia</option>
      <option value="Turkey">Turkey</option>
      <option value="Turkmenistan">Turkmenistan</option>
      <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
      <option value="Tuvalu">Tuvalu</option>
      <option value="Uganda">Uganda</option>
      <option value="Ukraine">Ukraine</option>
      <option value="United Arab Emirates">United Arab Emirates</option>
      <option value="United Kingdom of Great Britain and Northern Ireland">United Kingdom of Great Britain and Northern Ireland</option>
      <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
      <option value="United States of America">United States of America</option>
      <option value="Uruguay">Uruguay</option>
      <option value="Uzbekistan">Uzbekistan</option>
      <option value="Vanuatu">Vanuatu</option>
      <option value="Venezuela (Bolivarian Republic of)">Venezuela (Bolivarian Republic of)</option>
      <option value="Vietnam">Vietnam</option>
      <option value="Virgin Islands (British)">Virgin Islands (British)</option>
      <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
      <option value="Wallis and Futuna">Wallis and Futuna</option>
      <option value="Western Sahara">Western Sahara</option>
      <option value="Yemen">Yemen</option>
      <option value="Zambia">Zambia</option>
      <option value="Zimbabwe">Zimbabwe</option>
    </select>
  </div>
  <div class="form-group">
    <label for="countryofdomicile"><b>Country of Domicile</b></label>
    <select class="form-control" name="countryofdomicile"> 
      <option selected>{{ $applicant->countryofdomicile }}</option>
      <option value="ENT"></option>
      <option value="Afghanistan">Afghanistan</option>
      <option value="Åland Islands">Åland Islands</option>
      <option value="Albania">Albania</option>
      <option value="Algeria">Algeria</option>
      <option value="American Samoa">American Samoa</option>
      <option value="Andorra">Andorra</option>
      <option value="Angola">Angola</option>
      <option value="Anguilla">Anguilla</option>
      <option value="Antarctica">Antarctica</option>
      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
      <option value="Argentina">Argentina</option>
      <option value="Armenia">Armenia</option>
      <option value="Aruba">Aruba</option>
      <option value="Australia">Australia</option>
      <option value="Austria">Austria</option>
      <option value="Azerbaijan">Azerbaijan</option>
      <option value="Bahamas">Bahamas</option>
      <option value="Bahrain">Bahrain</option>
      <option value="Bangladesh">Bangladesh</option>
      <option value="Barbados">Barbados</option>
      <option value="Belarus">Belarus</option>
      <option value="Belgium">Belgium</option>
      <option value="Belize">Belize</option>
      <option value="Benin">Benin</option>
      <option value="Bermuda">Bermuda</option>
      <option value="Bhutan">Bhutan</option>
      <option value="Bolivia (Plurinational State of)">Bolivia (Plurinational State of)</option>
      <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
      <option value="Botswana">Botswana</option>
      <option value="Bouvet Island">Bouvet Island</option>
      <option value="Brazil">Brazil</option>
      <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
      <option value="Brunei Darussalam">Brunei Darussalam</option>
      <option value="Bulgaria">Bulgaria</option>
      <option value="Burkina Faso">Burkina Faso</option>
      <option value="Burundi">Burundi</option>
      <option value="Cabo Verde">Cabo Verde</option>
      <option value="Cambodia">Cambodia</option>
      <option value="Cameroon">Cameroon</option>
      <option value="Canada">Canada</option>
      <option value="Cayman Islands">Cayman Islands</option>
      <option value="Central African Republic">Central African Republic</option>
      <option value="Chad">Chad</option>
      <option value="Chile">Chile</option>
      <option value="China">China</option>
      <option value="Christmas Island">Christmas Island</option>
      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
      <option value="Colombia">Colombia</option>
      <option value="Comoros">Comoros</option>
      <option value="Congo (Republic of the)">Congo (Republic of the)</option>
      <option value="Congo (Democratic Republic of the)">Congo (Democratic Republic of the)</option>
      <option value="Cook Islands">Cook Islands</option>
      <option value="Costa Rica">Costa Rica</option>
      <option value="CÃ´te d'Ivoire">CÃ´te d'Ivoire</option>
      <option value="Croatia">Croatia</option>
      <option value="Cuba">Cuba</option>
      <option value="CuraÃ§ao">CuraÃ§ao</option>
      <option value="Cyprus">Cyprus</option>
      <option value="Czech Republic">Czech Republic</option>
      <option value="Denmark">Denmark</option>
      <option value="Djibouti">Djibouti</option>
      <option value="Dominica">Dominica</option>
      <option value="Dominican Republic">Dominican Republic</option>
      <option value="Ecuador">Ecuador</option>
      <option value="Egypt">Egypt</option>
      <option value="El Salvador">El Salvador</option>
      <option value="Equatorial Guinea">Equatorial Guinea</option>
      <option value="Eritrea">Eritrea</option>
      <option value="Estonia">Estonia</option>
      <option value="Ethiopia">Ethiopia</option>
      <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
      <option value="Faroe Islands">Faroe Islands</option>
      <option value="Fiji">Fiji</option>
      <option value="Finland">Finland</option>
      <option value="France">France</option>
      <option value="French Guiana">French Guiana</option>
      <option value="French Polynesia">French Polynesia</option>
      <option value="French Southern Territories">French Southern Territories</option>
      <option value="Gabon">Gabon</option>
      <option value="Gambia">Gambia</option>
      <option value="Georgia">Georgia</option>
      <option value="Germany">Germany</option>
      <option value="Ghana">Ghana</option>
      <option value="Gibraltar">Gibraltar</option>
      <option value="Greece">Greece</option>
      <option value="Greenland">Greenland</option>
      <option value="Grenada">Grenada</option>
      <option value="Guadeloupe">Guadeloupe</option>
      <option value="Guam">Guam</option>
      <option value="Guatemala">Guatemala</option>
      <option value="Guernsey">Guernsey</option>
      <option value="Guinea">Guinea</option>
      <option value="Guinea-Bissau">Guinea-Bissau</option>
      <option value="Guyana">Guyana</option>
      <option value="Haiti">Haiti</option>
      <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
      <option value="Vatican City State">Vatican City State</option>
      <option value="Honduras">Honduras</option>
      <option value="Hong Kong">Hong Kong</option>
      <option value="Hungary">Hungary</option>
      <option value="Iceland">Iceland</option>
      <option value="India">India</option>
      <option value="Indonesia">Indonesia</option>
      <option value="Iran">Iran</option>
      <option value="Iraq">Iraq</option>
      <option value="Ireland">Ireland</option>
      <option value="Isle of Man">Isle of Man</option>
      <option value="Israel">Israel</option>
      <option value="Italy">Italy</option>
      <option value="Jamaica">Jamaica</option>
      <option value="Japan">Japan</option>
      <option value="Jersey">Jersey</option>
      <option value="Jordan">Jordan</option>
      <option value="Kazakhstan">Kazakhstan</option>
      <option value="Kenya">Kenya</option>
      <option value="Kiribati">Kiribati</option>
      <option value="Korea (Democratic People's Republic of)">Korea (Democratic People's Republic of)</option>
      <option value="Korea (Republic of)">Korea (Republic of)</option>
      <option value="Kuwait">Kuwait</option>
      <option value="Kyrgyzstan">Kyrgyzstan</option>
      <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
      <option value="Latvia">Latvia</option>
      <option value="Lebanon">Lebanon</option>
      <option value="Lesotho">Lesotho</option>
      <option value="Liberia">Liberia</option>
      <option value="Libya">Libya</option>
      <option value="Liechtenstein">Liechtenstein</option>
      <option value="Lithuania">Lithuania</option>
      <option value="Luxembourg">Luxembourg</option>
      <option value="Macao">Macao</option>
      <option value="Macedonia (the former Yugoslav Republic of)">Macedonia (the former Yugoslav Republic of)</option>
      <option value="Madagascar">Madagascar</option>
      <option value="Malawi">Malawi</option>
      <option value="Malaysia">Malaysia</option>
      <option value="Maldives">Maldives</option>
      <option value="Mali">Mali</option>
      <option value="Malta">Malta</option>
      <option value="Marshall Islands">Marshall Islands</option>
      <option value="Martinique">Martinique</option>
      <option value="Mauritania">Mauritania</option>
      <option value="Mauritius">Mauritius</option>
      <option value="Mayotte">Mayotte</option>
      <option value="Mexico">Mexico</option>
      <option value="Micronesia (Federated States of)">Micronesia (Federated States of)</option>
      <option value="Moldova (Republic of)">Moldova (Republic of)</option>
      <option value="Monaco">Monaco</option>
      <option value="Mongolia">Mongolia</option>
      <option value="Montenegro">Montenegro</option>
      <option value="Montserrat">Montserrat</option>
      <option value="Morocco">Morocco</option>
      <option value="Mozambique">Mozambique</option>
      <option value="Myanmar">Myanmar</option>
      <option value="Namibia">Namibia</option>
      <option value="Nauru">Nauru</option>
      <option value="Nepal">Nepal</option>
      <option value="Netherlands">Netherlands</option>
      <option value="New Caledonia">New Caledonia</option>
      <option value="New Zealand">New Zealand</option>
      <option value="Nicaragua">Nicaragua</option>
      <option value="Niger">Niger</option>
      <option value="Nigeria">Nigeria</option>
      <option value="Niue">Niue</option>
      <option value="Norfolk Island">Norfolk Island</option>
      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
      <option value="Norway">Norway</option>
      <option value="Oman">Oman</option>
      <option value="Pakistan">Pakistan</option>
      <option value="Palau">Palau</option>
      <option value="Palestine, State of">Palestine, State of</option>
      <option value="Panama">Panama</option>
      <option value="Papua New Guinea">Papua New Guinea</option>
      <option value="Paraguay">Paraguay</option>
      <option value="Peru">Peru</option>
      <option value="Philippines">Philippines</option>
      <option value="Pitcairn">Pitcairn</option>
      <option value="Poland">Poland</option>
      <option value="Portugal">Portugal</option>
      <option value="Puerto Rico">Puerto Rico</option>
      <option value="Qatar">Qatar</option>
      <option value="RÃ©union">RÃ©union</option>
      <option value="Romania">Romania</option>
      <option value="Russian Federation">Russian Federation</option>
      <option value="Rwanda">Rwanda</option>
      <option value="Saint BarthÃ©lemy">Saint BarthÃ©lemy</option>
      <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
      <option value="Saint Lucia">Saint Lucia</option>
      <option value="Saint Martin (French part)">Saint Martin (French part)</option>
      <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
      <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
      <option value="Samoa">Samoa</option>
      <option value="San Marino">San Marino</option>
      <option value="Sao Tome and Principe">Sao Tome and Principe</option>
      <option value="Saudi Arabia">Saudi Arabia</option>
      <option value="Senegal">Senegal</option>
      <option value="Serbia">Serbia</option>
      <option value="Seychelles">Seychelles</option>
      <option value="Sierra Leone">Sierra Leone</option>
      <option value="Singapore">Singapore</option>
      <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
      <option value="Slovakia">Slovakia</option>
      <option value="Slovenia">Slovenia</option>
      <option value="Solomon Islands">Solomon Islands</option>
      <option value="Somalia">Somalia</option>
      <option value="South Africa">South Africa</option>
      <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
      <option value="South Sudan">South Sudan</option>
      <option value="Spain">Spain</option>
      <option value="Sri Lanka">Sri Lanka</option>
      <option value="Sudan">Sudan</option>
      <option value="Suriname">Suriname</option>
      <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
      <option value="Swaziland">Swaziland</option>
      <option value="Sweden">Sweden</option>
      <option value="Switzerland">Switzerland</option>
      <option value="Syrian Arab Republic">Syrian Arab Republic</option>
      <option value="Taiwan, Province of China">Taiwan, Province of China</option>
      <option value="Tajikistan">Tajikistan</option>
      <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
      <option value="Thailand">Thailand</option>
      <option value="Timor-Leste">Timor-Leste</option>
      <option value="Togo">Togo</option>
      <option value="Tokelau">Tokelau</option>
      <option value="Tonga">Tonga</option>
      <option value="Trinidad and Tobago">Trinidad and Tobago</option>
      <option value="Tunisia">Tunisia</option>
      <option value="Turkey">Turkey</option>
      <option value="Turkmenistan">Turkmenistan</option>
      <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
      <option value="Tuvalu">Tuvalu</option>
      <option value="Uganda">Uganda</option>
      <option value="Ukraine">Ukraine</option>
      <option value="United Arab Emirates">United Arab Emirates</option>
      <option value="United Kingdom of Great Britain and Northern Ireland">United Kingdom of Great Britain and Northern Ireland</option>
      <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
      <option value="United States of America">United States of America</option>
      <option value="Uruguay">Uruguay</option>
      <option value="Uzbekistan">Uzbekistan</option>
      <option value="Vanuatu">Vanuatu</option>
      <option value="Venezuela (Bolivarian Republic of)">Venezuela (Bolivarian Republic of)</option>
      <option value="Vietnam">Vietnam</option>
      <option value="Virgin Islands (British)">Virgin Islands (British)</option>
      <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
      <option value="Wallis and Futuna">Wallis and Futuna</option>
      <option value="Western Sahara">Western Sahara</option>
      <option value="Yemen">Yemen</option>
      <option value="Zambia">Zambia</option>
      <option value="Zimbabwe">Zimbabwe</option>
    </select>
  </div>
</div>
<div class="col-6">
  <div class="form-group">
    <label for="addressline1"><b>Address Line 1:</b></label>
    <input type="text" class="form-control" name="addressline1" value="{{ $applicant->addressline1 }}"/>
  </div>
  <div class="form-group">
    <label for="addressline2"><b>Address Line 2:</b></label>
    <input type="text" class="form-control" name="addressline2" value="{{ $applicant->addressline2 }}"/>
  </div>
  <div class="form-group">
    <label for="addressline3"><b>Address Line 3:</b></label>
    <input type="text" class="form-control" name="addressline3" value="{{ $applicant->addressline3 }}"/>
  </div>
  <div class="form-group">
    <label for="townorcity"><b>Town/City</b></label>
    <input type="text" class="form-control" name="townorcity" value="{{ $applicant->townorcity }}"/>
  </div>
  <div class="form-group">
    <label for="districtorprovince"><b>District/Province</b></label>
    <input type="text" class="form-control" name="districtorprovince" value="{{ $applicant->districtorprovince }}"/>
  </div>
  <div class="form-group">
    <label for="postcode"><b>Area/Zip Code</b></label>
    <input type="text" class="form-control" name="postcode" value="{{ $applicant->postcode }}"/>
  </div>
  <div class="form-group">
    <label for="country"><b>Country</b></label>
    <select class="form-control" name="country"> 
      <option selected>{{ $applicant->country }}</option>
      <option value="ENT"></option>
      <option value="Afghanistan">Afghanistan</option>
      <option value="Åland Islands">Åland Islands</option>
      <option value="Albania">Albania</option>
      <option value="Algeria">Algeria</option>
      <option value="American Samoa">American Samoa</option>
      <option value="Andorra">Andorra</option>
      <option value="Angola">Angola</option>
      <option value="Anguilla">Anguilla</option>
      <option value="Antarctica">Antarctica</option>
      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
      <option value="Argentina">Argentina</option>
      <option value="Armenia">Armenia</option>
      <option value="Aruba">Aruba</option>
      <option value="Australia">Australia</option>
      <option value="Austria">Austria</option>
      <option value="Azerbaijan">Azerbaijan</option>
      <option value="Bahamas">Bahamas</option>
      <option value="Bahrain">Bahrain</option>
      <option value="Bangladesh">Bangladesh</option>
      <option value="Barbados">Barbados</option>
      <option value="Belarus">Belarus</option>
      <option value="Belgium">Belgium</option>
      <option value="Belize">Belize</option>
      <option value="Benin">Benin</option>
      <option value="Bermuda">Bermuda</option>
      <option value="Bhutan">Bhutan</option>
      <option value="Bolivia (Plurinational State of)">Bolivia (Plurinational State of)</option>
      <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
      <option value="Botswana">Botswana</option>
      <option value="Bouvet Island">Bouvet Island</option>
      <option value="Brazil">Brazil</option>
      <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
      <option value="Brunei Darussalam">Brunei Darussalam</option>
      <option value="Bulgaria">Bulgaria</option>
      <option value="Burkina Faso">Burkina Faso</option>
      <option value="Burundi">Burundi</option>
      <option value="Cabo Verde">Cabo Verde</option>
      <option value="Cambodia">Cambodia</option>
      <option value="Cameroon">Cameroon</option>
      <option value="Canada">Canada</option>
      <option value="Cayman Islands">Cayman Islands</option>
      <option value="Central African Republic">Central African Republic</option>
      <option value="Chad">Chad</option>
      <option value="Chile">Chile</option>
      <option value="China">China</option>
      <option value="Christmas Island">Christmas Island</option>
      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
      <option value="Colombia">Colombia</option>
      <option value="Comoros">Comoros</option>
      <option value="Congo (Republic of the)">Congo (Republic of the)</option>
      <option value="Congo (Democratic Republic of the)">Congo (Democratic Republic of the)</option>
      <option value="Cook Islands">Cook Islands</option>
      <option value="Costa Rica">Costa Rica</option>
      <option value="CÃ´te d'Ivoire">CÃ´te d'Ivoire</option>
      <option value="Croatia">Croatia</option>
      <option value="Cuba">Cuba</option>
      <option value="CuraÃ§ao">CuraÃ§ao</option>
      <option value="Cyprus">Cyprus</option>
      <option value="Czech Republic">Czech Republic</option>
      <option value="Denmark">Denmark</option>
      <option value="Djibouti">Djibouti</option>
      <option value="Dominica">Dominica</option>
      <option value="Dominican Republic">Dominican Republic</option>
      <option value="Ecuador">Ecuador</option>
      <option value="Egypt">Egypt</option>
      <option value="El Salvador">El Salvador</option>
      <option value="Equatorial Guinea">Equatorial Guinea</option>
      <option value="Eritrea">Eritrea</option>
      <option value="Estonia">Estonia</option>
      <option value="Ethiopia">Ethiopia</option>
      <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
      <option value="Faroe Islands">Faroe Islands</option>
      <option value="Fiji">Fiji</option>
      <option value="Finland">Finland</option>
      <option value="France">France</option>
      <option value="French Guiana">French Guiana</option>
      <option value="French Polynesia">French Polynesia</option>
      <option value="French Southern Territories">French Southern Territories</option>
      <option value="Gabon">Gabon</option>
      <option value="Gambia">Gambia</option>
      <option value="Georgia">Georgia</option>
      <option value="Germany">Germany</option>
      <option value="Ghana">Ghana</option>
      <option value="Gibraltar">Gibraltar</option>
      <option value="Greece">Greece</option>
      <option value="Greenland">Greenland</option>
      <option value="Grenada">Grenada</option>
      <option value="Guadeloupe">Guadeloupe</option>
      <option value="Guam">Guam</option>
      <option value="Guatemala">Guatemala</option>
      <option value="Guernsey">Guernsey</option>
      <option value="Guinea">Guinea</option>
      <option value="Guinea-Bissau">Guinea-Bissau</option>
      <option value="Guyana">Guyana</option>
      <option value="Haiti">Haiti</option>
      <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
      <option value="Vatican City State">Vatican City State</option>
      <option value="Honduras">Honduras</option>
      <option value="Hong Kong">Hong Kong</option>
      <option value="Hungary">Hungary</option>
      <option value="Iceland">Iceland</option>
      <option value="India">India</option>
      <option value="Indonesia">Indonesia</option>
      <option value="Iran">Iran</option>
      <option value="Iraq">Iraq</option>
      <option value="Ireland">Ireland</option>
      <option value="Isle of Man">Isle of Man</option>
      <option value="Israel">Israel</option>
      <option value="Italy">Italy</option>
      <option value="Jamaica">Jamaica</option>
      <option value="Japan">Japan</option>
      <option value="Jersey">Jersey</option>
      <option value="Jordan">Jordan</option>
      <option value="Kazakhstan">Kazakhstan</option>
      <option value="Kenya">Kenya</option>
      <option value="Kiribati">Kiribati</option>
      <option value="Korea (Democratic People's Republic of)">Korea (Democratic People's Republic of)</option>
      <option value="Korea (Republic of)">Korea (Republic of)</option>
      <option value="Kuwait">Kuwait</option>
      <option value="Kyrgyzstan">Kyrgyzstan</option>
      <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
      <option value="Latvia">Latvia</option>
      <option value="Lebanon">Lebanon</option>
      <option value="Lesotho">Lesotho</option>
      <option value="Liberia">Liberia</option>
      <option value="Libya">Libya</option>
      <option value="Liechtenstein">Liechtenstein</option>
      <option value="Lithuania">Lithuania</option>
      <option value="Luxembourg">Luxembourg</option>
      <option value="Macao">Macao</option>
      <option value="Macedonia (the former Yugoslav Republic of)">Macedonia (the former Yugoslav Republic of)</option>
      <option value="Madagascar">Madagascar</option>
      <option value="Malawi">Malawi</option>
      <option value="Malaysia">Malaysia</option>
      <option value="Maldives">Maldives</option>
      <option value="Mali">Mali</option>
      <option value="Malta">Malta</option>
      <option value="Marshall Islands">Marshall Islands</option>
      <option value="Martinique">Martinique</option>
      <option value="Mauritania">Mauritania</option>
      <option value="Mauritius">Mauritius</option>
      <option value="Mayotte">Mayotte</option>
      <option value="Mexico">Mexico</option>
      <option value="Micronesia (Federated States of)">Micronesia (Federated States of)</option>
      <option value="Moldova (Republic of)">Moldova (Republic of)</option>
      <option value="Monaco">Monaco</option>
      <option value="Mongolia">Mongolia</option>
      <option value="Montenegro">Montenegro</option>
      <option value="Montserrat">Montserrat</option>
      <option value="Morocco">Morocco</option>
      <option value="Mozambique">Mozambique</option>
      <option value="Myanmar">Myanmar</option>
      <option value="Namibia">Namibia</option>
      <option value="Nauru">Nauru</option>
      <option value="Nepal">Nepal</option>
      <option value="Netherlands">Netherlands</option>
      <option value="New Caledonia">New Caledonia</option>
      <option value="New Zealand">New Zealand</option>
      <option value="Nicaragua">Nicaragua</option>
      <option value="Niger">Niger</option>
      <option value="Nigeria">Nigeria</option>
      <option value="Niue">Niue</option>
      <option value="Norfolk Island">Norfolk Island</option>
      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
      <option value="Norway">Norway</option>
      <option value="Oman">Oman</option>
      <option value="Pakistan">Pakistan</option>
      <option value="Palau">Palau</option>
      <option value="Palestine, State of">Palestine, State of</option>
      <option value="Panama">Panama</option>
      <option value="Papua New Guinea">Papua New Guinea</option>
      <option value="Paraguay">Paraguay</option>
      <option value="Peru">Peru</option>
      <option value="Philippines">Philippines</option>
      <option value="Pitcairn">Pitcairn</option>
      <option value="Poland">Poland</option>
      <option value="Portugal">Portugal</option>
      <option value="Puerto Rico">Puerto Rico</option>
      <option value="Qatar">Qatar</option>
      <option value="RÃ©union">RÃ©union</option>
      <option value="Romania">Romania</option>
      <option value="Russian Federation">Russian Federation</option>
      <option value="Rwanda">Rwanda</option>
      <option value="Saint BarthÃ©lemy">Saint BarthÃ©lemy</option>
      <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
      <option value="Saint Lucia">Saint Lucia</option>
      <option value="Saint Martin (French part)">Saint Martin (French part)</option>
      <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
      <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
      <option value="Samoa">Samoa</option>
      <option value="San Marino">San Marino</option>
      <option value="Sao Tome and Principe">Sao Tome and Principe</option>
      <option value="Saudi Arabia">Saudi Arabia</option>
      <option value="Senegal">Senegal</option>
      <option value="Serbia">Serbia</option>
      <option value="Seychelles">Seychelles</option>
      <option value="Sierra Leone">Sierra Leone</option>
      <option value="Singapore">Singapore</option>
      <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
      <option value="Slovakia">Slovakia</option>
      <option value="Slovenia">Slovenia</option>
      <option value="Solomon Islands">Solomon Islands</option>
      <option value="Somalia">Somalia</option>
      <option value="South Africa">South Africa</option>
      <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
      <option value="South Sudan">South Sudan</option>
      <option value="Spain">Spain</option>
      <option value="Sri Lanka">Sri Lanka</option>
      <option value="Sudan">Sudan</option>
      <option value="Suriname">Suriname</option>
      <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
      <option value="Swaziland">Swaziland</option>
      <option value="Sweden">Sweden</option>
      <option value="Switzerland">Switzerland</option>
      <option value="Syrian Arab Republic">Syrian Arab Republic</option>
      <option value="Taiwan, Province of China">Taiwan, Province of China</option>
      <option value="Tajikistan">Tajikistan</option>
      <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
      <option value="Thailand">Thailand</option>
      <option value="Timor-Leste">Timor-Leste</option>
      <option value="Togo">Togo</option>
      <option value="Tokelau">Tokelau</option>
      <option value="Tonga">Tonga</option>
      <option value="Trinidad and Tobago">Trinidad and Tobago</option>
      <option value="Tunisia">Tunisia</option>
      <option value="Turkey">Turkey</option>
      <option value="Turkmenistan">Turkmenistan</option>
      <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
      <option value="Tuvalu">Tuvalu</option>
      <option value="Uganda">Uganda</option>
      <option value="Ukraine">Ukraine</option>
      <option value="United Arab Emirates">United Arab Emirates</option>
      <option value="United Kingdom of Great Britain and Northern Ireland">United Kingdom of Great Britain and Northern Ireland</option>
      <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
      <option value="United States of America">United States of America</option>
      <option value="Uruguay">Uruguay</option>
      <option value="Uzbekistan">Uzbekistan</option>
      <option value="Vanuatu">Vanuatu</option>
      <option value="Venezuela (Bolivarian Republic of)">Venezuela (Bolivarian Republic of)</option>
      <option value="Vietnam">Vietnam</option>
      <option value="Virgin Islands (British)">Virgin Islands (British)</option>
      <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
      <option value="Wallis and Futuna">Wallis and Futuna</option>
      <option value="Western Sahara">Western Sahara</option>
      <option value="Yemen">Yemen</option>
      <option value="Zambia">Zambia</option>
      <option value="Zimbabwe">Zimbabwe</option>
    </select>
  </div>
  <div class="form-group">
    <label for="email"><b>Email</b></label>
    <input type="text" class="form-control" name="email" value="{{ $applicant->email }}"/>
  </div>
  <div class="form-group">
    <label for="telephonenumber"><b>Telephone Number</b></label>
    <input type="text" class="form-control" name="telephonenumber" value="{{ $applicant->telephonenumber }}"/>
  </div>  
</div>
</div>
  <div class="form-group">
    <label for="disabilities"><b>Do you have any disabilities or special requirements?</b></label>
    <select class="form-control" name="disabilities"> 
      <option selected>{{ $applicant->disabilities }}</option>
      <option value="Learning difference such as dyslexia, dyspraxia or AD(H)D">Learning difference such as dyslexia, dyspraxia or AD(H)D</option>
      <option value="Social/communication conditions such as a speech and language impairment or an autistic spectrum condition">Social/communication conditions such as a speech and language impairment or an autistic spectrum condition</option>
      <option value="Long-term illness or health condition such as cancer, HIV, diabetes, chronic heart disease, or epilepsy">Long-term illness or health condition such as cancer, HIV, diabetes, chronic heart disease, or epilepsy</option>
      <option value="Mental health condition, challenge or disorder, such as depression, schizophrenia or anxiety">Mental health condition, challenge or disorder, such as depression, schizophrenia or anxiety</option>
      <option value="Physical impairment (a condition that substantially limits one or more basic physical activities such as walking, climbing stairs, lifting or carrying).">Physical impairment (a condition that substantially limits one or more basic physical activities such as walking, climbing stairs, lifting or carrying).</option>
      <option value="D/deaf or have a hearing impairment">D/deaf or have a hearing impairment</option>
      <option value="Blind or have a visual impairment uncorrected by glasses">Blind or have a visual impairment uncorrected by glasses</option>
      <option value="Development condition that you have had since childhood which affects motor, cognitive, social and emotional skills, and speech and language">Development condition that you have had since childhood which affects motor, cognitive, social and emotional skills, and speech and language</option>
      <option value="No known impairment, health condition or learning difference">No known impairment, health condition or learning difference</option>
      <option value="An impairment, health condition or learning difference not listed above">An impairment, health condition or learning difference not listed above</option>
      <option value="Prefer not to say">Prefer not to say</option>
    </select>
  </div>
  <div class="form-group">
    <h2>Education History</h2>
    Please use the area below to give the name and address of the educational establishments attended for any courses studied since the age of 16.
    <label for="educationhistory"><b>Name and Address of Establishment</b></label>
    <textarea class="form-control" name="educationhistory" row=6 >{{ $applicant->educationhistory }}</textarea>
  </div>
  <div class="form-group">
    <h2>Qualifications</h2>
    List the qualifications that you currently hold or are studying for.
    <textarea class="form-control" name="qualifications" row=6 >{{ $applicant->qualifications }}</textarea>             
  </div>
  <div class="form-group">
    <h2>Work Experience</h2>
    Please use this section to provide details of the most relevant work experience that you have.
    <textarea class="form-control" name="workexperience" row=6 >{{ $applicant->workexperience }}</textarea>             
  </div>
  <div class="form-group">
    <h2>References</h2>
    Please nominate two academic referees to whom the University can refer. The referees you nominate should be able to comment on your suitability for the course for which you are applying.
    <br>
    <textarea class="form-control" name="feesandreferences" row=6 >{{ $applicant->feesandreferences }}</textarea>              
  </div>          
  <div class="form-group">
    <h2>Additional Information</h2>
    Please use the section below to outline your reasons for applying for your chosen course(s), together with any other information which you feel is relevant to support your application.
    <br>
    <b>IMPORTANT INFORMATION - Are you applying for a course at the same level you have already achieved?</b>
    <br><br>
    If YES, please can you explain below, how studying a degree at the University of Huddersfield compliments your previous study, and the impact of this on your future career aspirations.  The more information you provide below will help us to process your application more efficiently.
    <br>
    <textarea class="form-control" name="additionalinformation" row=6 >{{ $applicant->additionalinformation }}</textarea>              
  </div>          
  <button type="submit" class="btn btn-block btn-danger" name="submit">Update</button>
</form>

  </div>
</div>
@endsection
