@extends('layouts.app')

@section('content')

<div class="container-fluid bg-primary py-5 bg-header enterprise-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Enterprise Solutions</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h5 text-white">Kofax Business Connect</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Kofax Business Connect</h5>
               
                    <h1 class="mb-0">Keep Your Workforce Agile, Connected and Productive</h1>
                </div>
                <p class="mb-4">Kofax Business Connect™ extends business processes to mobile workforces, enabling employees to capture and submit documents and images, access files and securely print documents through a single platform. Your mobile workforce can perform more efficiently and deliver quality information downstream, while mitigating risks to sensitive data.</p>
                <div class="row">
                    <div class="col-lg-6">
                        <h4>One platform, many solutions</h4>
                        <p>You get a total solution, one with a unique combination of features that also extends the power of Kofax ControlSuite™, Kofax Equitrac®, Kofax AutoStore® and Kofax Output Manager™ to smart devices.</p>
                    </div>
                    <div class="col-lg-6">
                        <h4>On-the-go mobile capture</h4>
                        <p>Deliver information back into your business processes securely, whatever the format: a picture taken on your mobile device, an email attachment, a file downloaded from a cloud-hosted service, or from any application on your mobile device.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/printing82.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #f8f9fa;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h2 class="mb-0">Why Customers Choose Business Connect</h2>
        </div>
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="row g-5">
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/dms9.jpg" alt="" style="width: 100%; height: 200px">
                            </div>
                            <div class="p-4">
                            
                                <h4 class="mb-3">Eliminates paper-based forms</h4>
                                <p>By extending back-office business applications directly to a mobile device, there's no need to find, print, carry and return paper forms.</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/office13.jpg" alt="" style="width: 100%; height: 200px">
                            </div>
                            <div class="p-4">
                            
                                <h4 class="mb-3">Increases productivity with eSignature</h4>
                                <p>Keep business on track with signatures captured electronically and sent from smart devices. This allows mobile employees to quickly obtain approval or consent and validate information.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/webapplication1.jpg" alt="" style="width: 100%; height: 200px">
                            </div>
                            <div class="p-4">

                                <h4 class="mb-3">Saves time with bi-directional connectivity</h4>
                                <p>Minimize the time spent searching for and entering data to a mobile device using simple lookup fields. Return values stored in back-end databases and use it for indexing data in real time.</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h2 class="mb-0">How Business Connect Can Help</h2>
            {{-- <p>Modernize slow, manual, error-prone or expensive processes related to processing documents and electronic data.</p> --}}
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    
                    <h4 class="mb-3">Mobile Printing</h4>
                    <p class="m-0">Safely initiate print jobs from your smart phone or tablet to print securely wherever, whatever, whenever.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                  
                    <h4 class="mb-3">Geo-Tagging</h4>
                    <p class="m-0">Use map coordinates to validate where the work was performed or audit mobile workforces by reviewing location history.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                 
                    <h4 class="mb-3">Barcode Scanning With Lookup</h4>
                    <p class="m-0">Read a barcode with your mobile device and populate eForm fields instantaneously with accurate data pulled right from your company’s database.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                  
                    <h4 class="mb-3">File Security</h4>
                    <p class="m-0">Tap into the company network from wherever you are, for secure access to your files and shared network folders.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                
                    <h4 class="mb-3">SharePoint Integration</h4>
                    <p class="m-0">Browse, view, attach and print Microsoft SharePoint® documents from your mobile device.</p>
                   
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s" style="background:#dee2e6">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="mb-5 wow fadeInUp h-75 p-5 rounded" data-wow-delay="0.1s" style="background: #091E3E;">
                    <div class="container py-5">
                        <div class="row">
                            <div class="pb-3 mb-3 mx-auto align-items-center justify-content-center text-center" style="max-width: 1000px;">
                                <h3 class="mb-0 text-light">All Information at a Glance can be Found Here.</h3>
                            </div>                          
                            <a href="/download-file" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Product Brochure</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-primary rounded h-75 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3">Call Us for an Immediate Feedback</h3>
                    <h2 class="text-white mb-0">+254 11 4518893</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="mb-5 wow fadeInUp h-75 p-5 rounded" data-wow-delay="0.1s" style="background: #091E3E;">
                    <div class="container py-5">
                        <div class="row">
                            <div class="pb-3 mb-3 mx-auto align-items-center justify-content-center text-center" style="max-width: 1000px;">
                                <h3 class="mb-0 text-light">Questions? We Can Help.</h3>
                            </div>                          
                            <a href="/inquiry" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Request for an Inquiry</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection