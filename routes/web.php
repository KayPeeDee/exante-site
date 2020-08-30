<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::prefix('/')->group(function(){
    Route::get('/landing', 'SiteController@index')->name('welcome');
    Route::post('/contact-message/send','SiteController@createContactMessage')->name('send-message');

    Route::get('/','ClientPortal\LandingPageController@index')->name('landing');
    Route::get('/about-us', 'ClientPortal\AboutUsPageController@viewPage')->name('view-about-us');

    Route::get('/contact-us', 'ClientPortal\ContactUsPageController@viewContactUsPage')->name('view-contact-us');
    // Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/blog-list','ClientPortal\BlogPageController@blogList')->name('blog-list');
    Route::get('/blog-list/{id}','ClientPortal\BlogPageController@readBlog')->name('read-blog');

    Route::get('/products', 'ClientPortal\ProductsPageController@productsList')->name('product-list');
    Route::get('/products/{id}', 'ClientPortal\ProductsPageController@productDetails')->name('view-product-details');

    Route::get('/services', 'ClientPortal\ServicesPageController@viewServicesPage')->name('view-services-list');
    Route::get('/services/category/{id}', 'ClientPortal\ServicesPageController@viewServiceCategory')->name('service-category');
    Route::get('/services/category/{category}/{service}', 'ClientPortal\ServicesPageController@viewServiceDetails')->name('view-service-detail');
});

Route::prefix('admin-portal')->group(function(){
    Route::get('sections/all', 'SectionController@index')->name('get-sections');
    Route::post('sections/add', 'SectionController@createSection')->name('add-section');
    Route::get('sections/create', 'SectionController@addNewSectionPage')->name('create-section-page');
    Route::get('sections/tag/{tag}', 'SectionController@getSectionByTag')->name('get-section-by-tag');
    Route::get('sections/{id}', 'SectionController@getSectionById')->name('get-section-by-id');
    Route::put('sections/{id}', 'SectionController@updateSection')->name('update-section');
    Route::delete('sections/{id}', 'SectionController@deleteSection')->name('delete-section');



    Route::get('sections/{sectionId}/contact-us', 'ContactUsController@getContactUsDetails')->name('contact-us-details');
    Route::post('contact-us/create','ContactUsController@createContactUsDetails')->name('create-contact-us');
    Route::put('contact-us/{id}','ContactUsController@updateContactUsDetails')->name('update-contact-us');
    Route::delete('contact-us/{id}', 'ContactUsController@deleteContactUsDetails')->name('delete-contact-us');

    Route::get('sections/{sectionId}/our-clients','ClientController@getClientsBySectionId')->name('our-clients');
    Route::get('sections/{sectionId}/our-clients/create-page', 'ClientController@createClientPage')->name('create-client-page');
    Route::post('sections/{sectionId}/our-clients/create','ClientController@createClient')->name('create-client');
    Route::get('sections/{sectionId}/our-clients/{id}','ClientController@getClientById')->name('get-client');
    Route::put('sections/{sectionId}/our-clients/{id}','ClientController@updateClient')->name('update-client');
    Route::put('sections/{sectionId}/our-clients/{id}/update-logo','ClientController@updateLogo')->name('update-client-logo');
    Route::delete('sections/{sectionId}/our-clients/{id}','ClientController@deleteClient')->name('delete-client');


    Route::get('sections/{sectionId}/our-team','TeamController@getTeamMembersBySectionId')->name('our-team');
    Route::get('sections/{sectionId}/our-team/create-page', 'TeamController@createTeamPage')->name('create-team-page');
    Route::post('sections/{sectionId}/our-team/create','TeamController@createTeamMember')->name('create-team-member');
    Route::get('sections/{sectionId}/our-team/{id}','TeamController@getTeamMemberById')->name('get-team-member');
    Route::put('sections/{sectionId}/our-team/{id}','TeamController@updateTeamMember')->name('update-team-member');
    Route::put('sections/{sectionId}/our-team/{id}','TeamController@updateTeamMember')->name('update-team-member');
    Route::put('sections/{sectionId}/our-team/{id}/profile-image','TeamController@updateProfileImage')->name('update-team-member-image');
    Route::delete('sections/{sectionId}/our-team/{id}','TeamController@deleteTeamMember')->name('delete-team-member');

    Route::get('sections/{sectionId}/testimonials','TestimonialsController@getTestimonialsBySectionId')->name('testimonials');
    Route::get('sections/{sectionId}/testimonials/create-page', 'TestimonialsController@createTestimonialPage')->name('create-testimonial-page');
    Route::post('sections/{sectionId}/testimonials/create','TestimonialsController@createTestimonial')->name('create-testimonial');
    Route::get('sections/{sectionId}/testimonials/{id}','TestimonialsController@getTestimonialById')->name('get-testimonial');
    Route::put('sections/{sectionId}/testimonials/{id}','TestimonialsController@updateTestimonial')->name('update-testimonial');
    Route::put('sections/{sectionId}/testimonials/{id}/upload-image','TestimonialsController@updateUserProfilePic')->name('update-testimonial-image');
    Route::delete('sections/{sectionId}/testimonials/{id}','TestimonialsController@deleteTestimonial')->name('delete-testimonial');


    Route::get('sections/{sectionId}/project-categories','PortifolioController@getProjectCategoriesBySectionId')->name('project-categories');
    Route::get('sections/{sectionId}/project-categories/create-page', 'PortifolioController@createProjectCategoryPage')->name('create-category-page');
    Route::post('sections/{sectionId}/project-categories/create','PortifolioController@createProjectCategory')->name('create-category');
    Route::get('project-category/{id}','PortifolioController@getProjectCategoryById')->name('get-category');
    Route::put('project-category/{id}','PortifolioController@updateProjectCategory')->name('update-category');
    Route::delete('sections/{sectionId}/project-categories/{id}','PortifolioController@deleteProjectCategory')->name('delete-category');

    Route::get('project-category/{id}/projects/create-page','PortifolioController@createProjectPage')->name('create-project-page');
    Route::post('project-category/{id}/projects/create','PortifolioController@createProject')->name('create-project');
    Route::get('project-category/{id}/projects/{projectId}','PortifolioController@getProjectById')->name('get-project');
    Route::put('project-category/{id}/projects/{projectId}','PortifolioController@updateProject')->name('update-project');
    Route::put('project-category/{id}/projects/{projectId}/upload-image','PortifolioController@updateProjectImage')->name('update-project-image');
    Route::delete('project-category/{id}/projects/{projectId}','PortifolioController@deleteProject')->name('delete-project');

    // Route::get('sections/{sectionId}/our-services','ServiceController@getServicesBySectionId')->name('services');
    // Route::get('sections/{sectionId}/our-services/create-page', 'ServiceController@createServicePage')->name('create-service-page');
    // Route::post('sections/{sectionId}/our-services/create','ServiceController@createService')->name('create-service');
    // Route::get('sections/{sectionId}/our-services/{id}','ServiceController@getServiceById')->name('get-service');
    // Route::put('sections/{sectionId}/our-services/{id}','ServiceController@updateService')->name('update-service');
    // Route::delete('sections/{sectionId}/our-services/{id}','ServiceController@deleteService')->name('delete-service');

    Route::get('sections/{sectionId}/why-choose-us','BenefitsController@getBenefitsBySectionId')->name('benefits');
    Route::get('sections/{sectionId}/why-choose-us/create-page', 'BenefitsController@createBenefitPage')->name('create-benefit-page');
    Route::post('sections/{sectionId}/why-choose-us/create','BenefitsController@createBenefit')->name('create-benefit');
    Route::get('sections/{sectionId}/why-choose-us/{id}','BenefitsController@getBenefitById')->name('get-benefit');
    Route::put('sections/{sectionId}/why-choose-us/{id}','BenefitsController@updateBenefit')->name('update-benefit');
    Route::delete('sections/{sectionId}/why-choose-us/{id}','BenefitsController@deleteBenefit')->name('delete-benefit');

    Route::get('sections/{sectionId}/statistic/create-page', 'BenefitsController@createStatisticPage')->name('create-statistic-page');
    Route::post('sections/{sectionId}/statistic/create','BenefitsController@createStatistic')->name('create-statistic');
    Route::get('sections/{sectionId}/statistic/{id}','BenefitsController@getStatisticById')->name('get-statistic');
    Route::put('sections/{sectionId}/statistic/{id}','BenefitsController@updateStatistic')->name('update-statistic');
    Route::delete('sections/{sectionId}/statistic/{id}','BenefitsController@deleteStatistic')->name('delete-statistic');

    Route::get('sections/{sectionId}/about-us','AboutController@getAboutUsDetailsBySectionId')->name('about-us');
    Route::get('sections/{sectionId}/about-us/create-page','AboutController@createAboutusDetailsPage')->name('about-create-page');
    Route::post('sections/{sectionId}/about-us/create','AboutController@createAboutusDetails')->name('create-about-us');
    Route::get('sections/{sectionId}/about-us/{id}','AboutController@getAboutUsDetailsById')->name('get-about-us');
    Route::put('sections/{sectionId}/about-us/{id}','AboutController@updateAboutUsDetails')->name('update-about-us');
    Route::put('sections/{sectionId}/about-us/{id}/image','AboutController@updateAboutUsImage')->name('update-about-us-image');
    Route::delete('sections/{sectionId}/about-us/{id}','AboutController@deleteAboutUsDetails')->name('delete-about-us');

    Route::get('sections/{sectionId}/home', 'HomeController@getHomeDetails')->name('home-details');
    Route::post('home/create','HomeController@createHomeDetails')->name('create-home-details');
    Route::put('home/{id}','HomeController@updateHomeDetails')->name('update-home-details');
    Route::put('home/{id}/upload-bg-image','HomeController@updateBackgroungImage')->name('update-home-bg-image');
    Route::put('home/{id}/upload-fg-image','HomeController@updateForegroundImage')->name('update-home-fg-image');
    Route::delete('home/{id}', 'HomeController@deleteHomeDetails')->name('delete-home-details');

    // Route::patch()->name('');

});


Route::prefix('admin')->group(function(){
    Route::get('/service-categories', 'AdminPortal\ServiceCategoryController@getAllServiceCategories')->name('list-service-categories');
    Route::get('/service-categories/{id}', 'AdminPortal\ServiceCategoryController@getServiceCategoryById')->name('service-category-detail');
    Route::get('/service-categories/create', 'AdminPortal\ServiceCategoryController@newServiceCategoryPage')->name('create-service-category-page');
    Route::post('/service-categories/store', 'AdminPortal\ServiceCategoryController@createServiceCategory')->name('create-service-category');
    Route::put('/service-categories/{id}/update-details', 'AdminPortal\ServiceCategoryController@updateServiceCategoryDetails')->name('update-service-category');
    Route::put('/service-categories/{id}/update-image', 'AdminPortal\ServiceCategoryController@updateServiceCategoryImage')->name('update-service-category-image');
    Route::delete('/service-categories/{id}', 'AdminPortal\ServiceCategoryController@deleteServiceCategory')->name('delete-service-category');

    Route::get('/services/all', 'AdminPortal\ServiceController@getAllServices')->name('list-services');
    Route::get('/services/create', 'AdminPortal\ServiceController@createServicePage')->name('create-service-page');
    Route::post('/services/store', 'AdminPortal\ServiceController@createService')->name('create-service');
    Route::get('/services/{id}', 'AdminPortal\ServiceController@getServiceById')->name('service-detail');
    Route::put('/services/{id}/update-details', 'AdminPortal\ServiceController@updateServiceDetails')->name('update-service-details');
    Route::put('/services/{id}/update-image', 'AdminPortal\ServiceController@uploadServiceImage')->name('update-service-image');
    Route::delete('/services/{id}', 'AdminPortal\ServiceController@deleteService')->name('delete-service');

    Route::get('/products/all', 'AdminPortal\ProductController@getAllProducts')->name('list-products');
    Route::get('/products/create', 'AdminPortal\ProductController@createProductPage')->name('create-product-page');
    Route::post('/products/store', 'AdminPortal\ProductController@createProduct')->name('create-product');
    Route::get('/products/{id}', 'AdminPortal\ProductController@getProductById')->name('product-detail');
    Route::put('/products/{id}/update-details', 'AdminPortal\ProductController@updateProductDetails')->name('update-product-details');
    Route::put('/products/{id}/update-image', 'AdminPortal\ProductController@updateProductImage')->name('update-product-image');
    Route::delete('/products/{id}', 'AdminPortal\ProductController@deleteProduct')->name('delete-product');

    Route::get('/company-details', 'AdminPortal\CompanyDetailsController@getCompanyDetails')->name('get-company-details');
    Route::post('/company-details/create', 'AdminPortal\CompanyDetailsController@createCompanyDetails')->name('create-company-details');
    Route::put('/company-details/{id}/update', 'AdminPortal\CompanyDetailsController@updateCompanyDetails')->name('update-company-details');
    Route::delete('/company-details/{id}', 'AdminPortal\CompanyDetailsController@deleteCompanyDetails')->name('delete-company-details');

    Route::get('/team', 'AdminPortal\TeamController@getTeamMembers')->name('list-team-members');
    Route::get('/team/create', 'AdminPortal\TeamController@createTeamMemberPage')->name('add-team-member-page');
    Route::post('/team/store', 'AdminPortal\TeamController@createTeamMember')->name('add-team-member');
    Route::get('/team/{id}', 'AdminPortal\TeamController@getTeamMemberById')->name('team-member-detail');
    Route::put('/team/{id}/update-member-details', 'AdminPortal\TeamController@updateTeamMember')->name('update-team-member-details');
    Route::put('/team/{id}/update-member-image', 'AdminPortal\TeamController@updateProfileImage')->name('update-team-member-image');
    Route::delete('/team/{id}', 'AdminPortal\TeamController@deleteTeamMember')->name('delete-team-member');

    Route::get('/phone-numbers', 'AdminPortal\PhoneNumberController@getAllPhoneNumbers')->name('list-phone-numbers');
    Route::get('/phone-numbers/{id}', 'AdminPortal\PhoneNumberController@getPhoneNumberById')->name('phone-number-detail');
    Route::post('/phone-numbers/store', 'AdminPortal\PhoneNumberController@createPhoneNumber')->name('create-phone-number');
    Route::put('/phone-numbers/{id}', 'AdminPortal\PhoneNumberController@updatePhoneNumber')->name('update-phone-number');
    Route::delete('/phone-numbers/{id}', 'AdminPortal\PhoneNumberController@deletePhoneNumber')->name('delete-phone-number');

    Route::get('/email-addresses', 'AdminPortal\EmailAddressController@getAllEmailAddresses')->name('list-email-addresses');
    Route::get('/email-addresses/{id}', 'AdminPortal\EmailAddressController@getEmailAddressById')->name('email-address-detail');
    Route::post('/email-addresses/store', 'AdminPortal\EmailAddressController@createEmailAddress')->name('create-email-address');
    Route::put('/email-addresses/{id}', 'AdminPortal\EmailAddressController@updateEmailAddress')->name('update-email-address');
    Route::delete('/email-addresses/{id}', 'AdminPortal\EmailAddressController@deleteEmailAddress')->name('delete-email-address');

    Route::get('/social-media-links', 'AdminPortal\SocialMediaLinksController@getAllSocialMediaLinks')->name('list-social-media-links');
    Route::get('/social-media-links/create', 'AdminPortal\SocialMediaLinksController@createSocialMediaLinkPage')->name('add-social-media-link-page');
    Route::post('/social-media-links/store', 'AdminPortal\SocialMediaLinksController@createSocialMediaLink')->name('add-social-media-link');
    Route::get('/social-media-links/{id}', 'AdminPortal\SocialMediaLinksController@getSocialMediaLinkById')->name('social-media-link-detail');
    Route::put('/social-media-links/{id}/update-details', 'AdminPortal\SocialMediaLinksController@updateSocialMediaLinkDetails')->name('update-social-media-link-details');
    Route::put('/social-media-links/{id}/update-image', 'AdminPortal\SocialMediaLinksController@updateSocialMediaLinkImage')->name('update-social-media-link-image');
    Route::delete('/social-media-links/{id}', 'AdminPortal\SocialMediaLinksController@deleteSocialMediaLink')->name('delete-social-media-link');

});


