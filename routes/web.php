<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('front.about-us');
Route::get('/career', [HomeController::class, 'career'])->name('front.career');
Route::get('/case-study', [HomeController::class, 'caseStudy'])->name('front.case-study');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('front.blogs');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('front.contact-us');
Route::get('/banking-and-finance-industry', [HomeController::class, 'bankingAndFinanceIndustry'])->name('front.banking-and-finance-industry');
Route::get('/b2b-b2c-and-reseller-industry', [HomeController::class, 'b2bB2cAndResellerIndustry'])->name('front.b2b-b2c-and-reseller-industry');
Route::get('/e-commerce-industry', [HomeController::class, 'eCommerceIndustry'])->name('front.e-commerce-industry');
Route::get('/education-industry', [HomeController::class, 'educationIndustry'])->name('front.education-industry');
Route::get('/insurance-industry', [HomeController::class, 'insuranceIndustry'])->name('front.insurance-industry');
Route::get('/manufacturing-industry', [HomeController::class, 'manufacturingIndustry'])->name('front.manufacturing-industry');
Route::get('/on-demand-industry', [HomeController::class, 'onDemandIndustry'])->name('front.on-demand-industry');
Route::get('/sales-and-marketing-industry', [HomeController::class, 'salesAndMarketingIndustry'])->name('front.sales-and-marketing-industry');
Route::get('/social-networking-industry', [HomeController::class, 'socialNetworkingIndustry'])->name('front.social-networking-industry');
Route::get('/transportation-and-logistics-industry', [HomeController::class, 'transportationAndLogisticsIndustry'])->name('front.transportation-and-logistics-industry');
Route::get('/travel-and-hospitality-industry', [HomeController::class, 'travelAndHospitalityIndustry'])->name('front.travel-and-hospitality-industry');
Route::get('/app-development-service', [HomeController::class, 'appDevelopmentService'])->name('front.app-development-service');
Route::get('/business-development-service', [HomeController::class, 'businessDevelopmentService'])->name('front.business-development-service');
Route::get('/cloud-computing-service', [HomeController::class, 'cloudComputingService'])->name('front.cloud-computing-service');
Route::get('/degital-and-media-marketing-service', [HomeController::class, 'degitalAndMediaMarketingService'])->name('front.degital-and-media-marketing-service');
Route::get('/design-and-enperience-service', [HomeController::class, 'designAndEnperienceService'])->name('front.design-and-enperience-service');
Route::get('/it-support-and-consulting-service', [HomeController::class, 'itSupportAndConsultingService'])->name('front.it-support-and-consulting-service');
Route::get('/web-development-service', [HomeController::class, 'webDevelopmentService'])->name('front.web-development-service');
Route::get('/healthcare-industry', [HomeController::class, 'healthcareIndustry'])->name('front.healthcare-industry');
Route::get('/real-estate-industry', [HomeController::class, 'realEstateIndustry'])->name('front.real-estate-industry');
Route::get('/media-and-entertainment-industry', [HomeController::class, 'mediaAndEntertainmentIndustry'])->name('front.media-and-entertainment-industry');
Route::get('/automative-and-vehicle-industry', [HomeController::class, 'automativeAndVehicleIndustry'])->name('front.automative-and-vehicle-industry');
Route::get('/white-labeling-service', [HomeController::class, 'whiteLabelingService'])->name('front.white-labeling-service');
Route::get('/project-managment-service', [HomeController::class, 'projectManagmentService'])->name('front.project-managment-service');
Route::get('/content-management-services', [HomeController::class, 'contentManagementServices'])->name('front.content-management-services');



