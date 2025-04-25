<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return $this->view('frontend.index', ['message' => 'hi good evening']);

    }

    public function aboutUs(){
        return $this->view('frontend.about-us', ['message' => 'hi good evening']);
        
    }
    public function career(){
        return $this->view('frontend.career', ['message' => 'hi good evening']);
    }
    
    public function caseStudy(){
        return $this->view('frontend.case-study', ['message' => 'hi good evening']);
        
    }
    
    public function blogs(){
        return $this->view('frontend.blogs', ['message' => 'hi good evening']);
    }
    
    public function contactUs(){
        return $this->view('frontend.contact-us', ['message' => 'hi good evening']);

    }

    public function bankingAndFinanceIndustry(){
        return $this->view('frontend.industries.banking-and-finance-industry', ['message' => 'hi good evening']);

    }

    public function b2bB2cAndResellerIndustry(){
        return $this->view('frontend.industries.b2b-b2c-and-reseller-industry', ['message' => 'hi good evening']);

    }

    public function eCommerceIndustry(){
        return $this->view('frontend.industries.e-commerce-industry', ['message' => 'hi good evening']);

    }

    public function educationIndustry(){
        return $this->view('frontend.industries.education-industry', ['message' => 'hi good evening']);

    }

    public function insuranceIndustry(){
        return $this->view('frontend.industries.insurance-industry', ['message' => 'hi good evening']);

    }

    public function manufacturingIndustry(){
        return $this->view('frontend.industries.manufacturing-industry', ['message' => 'hi good evening']);

    }


    public function onDemandIndustry(){
        return $this->view('frontend.industries.on-demand-industry', ['message' => 'hi good evening']);

    }

    public function salesAndMarketingIndustry(){
        return $this->view('frontend.industries.sales-and-marketing-industry', ['message' => 'hi good evening']);

    }

    public function socialNetworkingIndustry(){
        return $this->view('frontend.industries.social-networking-industry', ['message' => 'hi good evening']);

    }

    public function transportationAndLogisticsIndustry(){
        return $this->view('frontend.industries.transportation-and-logistics-industry', ['message' => 'hi good evening']);

    }

    public function travelAndHospitalityIndustry(){
        return $this->view('frontend.industries.travel-and-hospitality-industry', ['message' => 'hi good evening']);

    }

    public function appDevelopmentService(){
        return $this->view('frontend.services.app-development-service', ['message' => 'hi good evening']);

    }

    public function businessDevelopmentService(){
        return $this->view('frontend.services.business-development-service', ['message' => 'hi good evening']);

    }

    public function cloudComputingService(){
        return $this->view('frontend.services.cloud-computing-service', ['message' => 'hi good evening']);

    }

    public function degitalAndMediaMarketingService(){
        return $this->view('frontend.services.degital-and-media-marketing-service', ['message' => 'hi good evening']);

    }
    
    public function designAndEnperienceService(){
        return $this->view('frontend.services.design-and-enperience-service', ['message' => 'hi good evening']);

    }

    public function itSupportAndConsultingService(){
        return $this->view('frontend.services.it-support-and-consulting-service', ['message' => 'hi good evening']);

    }

    public function webDevelopmentService(){
        return $this->view('frontend.services.web-development-service', ['message' => 'hi good evening']);

    }

    public function healthcareIndustry(){
        return $this->view('frontend.industries.healthcare-industry', ['message' => 'hi good evening']);

    }

    public function realEstateIndustry(){
        return $this->view('frontend.industries.real-estate-industry', ['message' => 'hi good evening']);

    }

    public function mediaAndEntertainmentIndustry(){
        return $this->view('frontend.industries.media-and-entertainment-industry', ['message' => 'hi good evening']);

    }

    public function automativeAndVehicleIndustry(){
        return $this->view('frontend.industries.automative-and-vehicle-industry', ['message' => 'hi good evening']);

    }

    public function whiteLabelingService(){
        return $this->view('frontend.services.white-labeling-service', ['message' => 'hi good evening']);

    }

    public function projectManagmentService(){
        return $this->view('frontend.services.project-managment-service', ['message' => 'hi good evening']);

    }

    public function contentManagementServices(){
        return $this->view('frontend.services.content-management-services', ['message' => 'hi good evening']);

    }
}
