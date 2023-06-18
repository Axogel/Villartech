@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection


@section('content')
    @include('sections.header-view')
    <x-header-view-dinamic :titleDinamic="'PRIVACY POLICY'" :subtitleDinamic="''" />


    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-10 mx-auto pt-5 carta" style="background-color: white; text-align:left;">
                <div class="container">
                    <div class="col-9" id="contenedor">
                        <p class="subtitulo">
                            The purpose of this Privacy Notice is to inform you about the treatment that will be given to the personal data collected, used, stored and/or transferred by <span class="negrita">VILLARTECHNOLOGIES</span>, in accordance with the terms and conditions described below:
                        </p>

                        <p class="titulo">Information that is collected</p>

                        <p class="subtitulo">
                            Our website may collect personal information, for example: Name, contact information such as your email address and demographic information. Also, when necessary, specific information may be required to process an order or make a delivery or billing. 
                        </p>

                        <p class="titulo">
                            Use of the information collected
                        </p>

                        <p class="subtitulo">
                        Our website uses the information in order to provide the best possible service, particularly to keep track of users, to keep track of orders if applicable, and to improve our products and services. We may periodically send e-mails through our site with offers of our special services, new products and other marketing information that we think may be relevant to you or may be of benefit to you, these e-mails will be sent to the address you provide and may be unsubscribed from at any time. <span class="negrita">VILLARTECHNOLOGIES</span> is highly committed to fulfilling our commitment to keeping your information secure. We use the most advanced systems and constantly update them to ensure that there is no unauthorized access to your information.
                        </p>

                        <p class="titulo">
                            Link to third Parties
                        </p>

                        <p class="subtitulo">
                            Links to Third Parties This website may contain links to other sites that may be of interest to you. Once you click on these links and leave our site, we no longer have control over the site to which you are redirected and therefore we are not responsible for the terms or privacy or data protection practices of such other sites. These sites are subject to their own privacy policies and we recommend that you check with them to confirm that you agree with them.
                        </p>

                        <p class="titulo">
                            Control of your personal information At 
                        </p>

                        <p class="subtitulo">
                            Any time you can restrict the collection or use of personal information that is provided to our website. Whenever you are asked to fill in the form to contact us, you can check or uncheck the option to receive information about the latest news and interesting projects by e-mail. This company will not sell, give away or distribute the personal information that is collected without your consent, unless required by a judge with a court order. 

                        </p>

                        <p class="titulo">
                            Security, use or disclosure of personal data 
                        </p>

                        <p class="subtitulo">
                            <span class="negrita">VILLARTECHNOLOGIES</span> will implement the necessary technical, administrative and physical security measures to protect your personal data and prevent its damage, loss, alteration or destruction, as well as unauthorized use, access or treatment. Only authorized personnel, who have complied with and observed the corresponding confidentiality requirements, may participate in the processing of your personal data. Authorized personnel are prohibited from allowing access by unauthorized persons and from using your personal data for purposes other than those set forth in this Privacy Notice. The obligation of confidentiality of the persons involved in the processing of your personal data subsists even after the termination of the relationship with <span class="negrita">VILLARTECHNOLOGIES</span>.
                        </p>

                        <p class="titulo">
                            Changes to the Privacy Notice
                        </p>

                        <p class="subtitulo">
                            This privacy notice may undergo modifications, changes and/or updates derived from new legal requirements, our privacy practices or other causes. However, we are committed to keep you informed about the changes that this privacy notice may undergo through the website www.villartechnologies.com.ve showing the last date of update of this privacy notice. Updated 
                        </p>

                        <p class="titulo">
                            Update Date:
                        </p>

                        <p class="titulo">
                            June 16, 2023
                        </p>

                        <br><br>
                    </div>
                </div>


            </div>

        </div>


    </div>

    <style>
        .carta {
            box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.3);
        }

        .subtitlo {
            text-align: left;
            font-size: 18px;
            font-family: 'Lato';
        }

        .negrita {
            font-size: 18px;
            font-family: 'Lato';
            font-weight: 800;
            color:black;
        }
    
        .titulo {
            font-size: 25px;
            font-family: 'Lato';
            font-weight: 800;
            color:black;
        }

        @media (min-width:768px) {
            #contenedor { 
                position: relative;
                left: 90px;
                top: 10px;
            }
        }
    </style>
@endsection
