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


Route::get('/', 'SiteController@index')->name('welcome');
Route::post('/contact-message/send','SiteController@createContactMessage')->name('send-message');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
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

    Route::get('sections/{sectionId}/our-services','ServiceController@getServicesBySectionId')->name('services');
    Route::get('sections/{sectionId}/our-services/create-page', 'ServiceController@createServicePage')->name('create-service-page');
    Route::post('sections/{sectionId}/our-services/create','ServiceController@createService')->name('create-service');
    Route::get('sections/{sectionId}/our-services/{id}','ServiceController@getServiceById')->name('get-service');
    Route::put('sections/{sectionId}/our-services/{id}','ServiceController@updateService')->name('update-service');
    Route::delete('sections/{sectionId}/our-services/{id}','ServiceController@deleteService')->name('delete-service');

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
