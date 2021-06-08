<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('mobile/v1')->group(function () {
    // Users
    Route::middleware(['auth:api', 'checkTenantUser'])->prefix('users')
        ->group(function () {
            Route::get('/me', 'Mobile\V1\UsersController@me');
            Route::get('/{id}', 'Mobile\V1\UsersController@view');
            Route::post('/logout', 'Mobile\V1\UsersController@logout')
                ->middleware('cors');
        });

    //Profiles
    Route::middleware(['auth:api', 'checkTenantUser'])->prefix('profiles')
        ->group(function () {
            Route::get('/{id}', 'Mobile\V1\ProfilesController@view');
            Route::put('/{id}', 'Mobile\V1\ProfilesController@update');
        });

    // Builder
    Route::middleware(['auth:api', 'checkTenantUser'])->prefix('builder')
        ->group(function () {
            Route::get('/{id}', 'Mobile\V1\BuilderController@show');
            Route::get('/modules/{id}', 'Mobile\V1\BuilderController@showModule');
        });

    // Categories
    Route::middleware(['auth:api', 'checkTenantUser'])->prefix('categories')
        ->group(function () {
            Route::get('/', 'Mobile\V1\CategoriesController@index');
        });

    // Pathways
    Route::middleware(['auth:api', 'checkTenantUser'])->prefix('pathways')
        ->group(function () {
            Route::post('/', 'Mobile\V1\PathwaysController@index');
        });

    //Magic Link
    Route::get('/magicLink', 'Mobile\V1\MagicLinkController@getLink');

    //Settings
    Route::middleware(['auth:api'])->prefix('settings')
        ->group(function () {
            Route::get('/key/{key}', 'Mobile\V1\MobileSettingsController@showByKey');
        });

    // Completed
    Route::middleware(['auth:api', 'checkTenantUser'])->prefix('completed')
        ->group(function () {
            Route::post('/pathways', 'Mobile\V1\CompletedPathwaysController@index');
            Route::get('/pathways/count', 'Mobile\V1\CompletedPathwaysController@count');
            Route::put('/pathways/{id}', 'Mobile\V1\CompletedPathwaysController@complete');
//            Route::get('/sequences', 'Mobile\V1\CompletedSequencesController@index');
//            Route::get('/modules', 'Mobile\V1\CompletedModulesController@index');
//            Route::get('/sequences/{id}', 'Mobile\V1\CompletedSequencesController@store');
//            Route::get('/modules/{id}', 'Mobile\V1\CompletedModulesController@store');
        });
});

Route::prefix('cms/v1')->group(function () {
    //Settings
    Route::middleware(['auth:api'])->prefix('settings')
        ->group(function () {
            Route::get('/', 'Cms\V1\CmsSettingsController@index');
            Route::get('/{id}', 'Cms\V1\CmsSettingsController@show');
            Route::post('/', 'Cms\V1\CmsSettingsController@store');
            Route::put('/{id}', 'Cms\V1\CmsSettingsController@update');
            Route::delete('/{id}', 'Cms\V1\CmsSettingsController@destroy');
        });

    //Media Library
    Route::middleware(['auth:api'])->prefix('media-files')
        ->group(function () {
            Route::get('/', 'Cms\V1\CmsMediaFilesController@index');
            Route::get('/{id}', 'Cms\V1\CmsMediaFilesController@show');
            Route::post('/', 'Cms\V1\CmsMediaFilesController@store');
            Route::put('/{id}', 'Cms\V1\CmsMediaFilesController@update');
            Route::delete('/{id}', 'Cms\V1\CmsMediaFilesController@destroy');
        });

});

Route::prefix('v1')->group(function () {
    Route::get('/rollbar/message', 'RollbarsController@getMessage')
        ->middleware(['auth:api', 'checkSuperAdmin']);

    Route::prefix('auth')->group(function () {
        // Below mention routes are public, user can access those without any restriction.
        // Create New User
        Route::post('register', 'AuthController@register');
        // Login User
        Route::post('login', 'AuthController@login');

        // Refresh the JWT Token
        Route::get('refresh', 'AuthController@refresh');

        // Below mention routes are available only for the authenticated users.
        Route::middleware('auth:api')->group(function () {
            // Get user info
            Route::get('me', 'AuthController@me');

            // Logout user from application
            Route::post('logout', 'AuthController@logout');
        });
    });

    // Users
    Route::middleware('auth:api')->prefix('users')->group(function () {
        Route::get('/', 'UsersController@index')->middleware('checkAdmin');
        Route::get('/me', 'UsersController@me');
        Route::get('/{id}', 'UsersController@view');
        Route::post('/', 'UsersController@store');
        Route::put('/{id}', 'UsersController@update');
        Route::delete('/{id}', 'UsersController@destroy');
        Route::post('/logout', 'AuthController@logout')->middleware('cors');
    });

    //Profiles
    Route::get('/profile', 'ProfilesController@myProfile')->middleware('auth:api');
    Route::middleware('auth:api')->prefix('profiles')->group(function () {
        Route::get('/', 'ProfilesController@index')->middleware('checkAdmin');
        Route::get('/{id}', 'ProfilesController@view');
        Route::post('/', 'ProfilesController@store');
        Route::put('/{id}', 'ProfilesController@update');
        Route::delete('/{id}', 'ProfilesController@destroy');
    });

    // Companies
    Route::middleware('auth:api')->prefix('companies')->group(function () {
        Route::get('/', 'CompaniesController@index')->middleware('checkAdmin');
        Route::get('/{id}', 'CompaniesController@show')
            ->middleware('checkCompanyManager');
        Route::post('/', 'CompaniesController@store')->middleware('checkAdmin');
        Route::put('/{id}', 'CompaniesController@update')
            ->middleware('checkCompanyManager');
        Route::delete('/{id}', 'CompaniesController@destroy')
            ->middleware('checkAdmin');
    });

    //Roles
    Route::middleware(['auth:api', 'checkAdmin'])->prefix('roles')
        ->group(function () {
            Route::get('/', 'RolesController@index');
            Route::get('/{id}', 'RolesController@view');
            Route::post('/', 'RolesController@store');
            Route::put('/{id}', 'RolesController@update');
            Route::delete('/{id}', 'RolesController@destroy');
        });

    //Permissions
    Route::middleware(['auth:api', 'checkAdmin'])->prefix('permissions')
        ->group(function () {
            Route::get('/', 'PermissionsController@index');
            Route::get('/{id}', 'PermissionsController@view');
            Route::post('/', 'PermissionsController@store');
            Route::put('/{id}', 'PermissionsController@update');
            Route::delete('/{id}', 'PermissionsController@destroy');
        });

    //Tags
    Route::middleware('auth:api')->prefix('tags')->group(function () {
        Route::get('/', 'TagsController@index')->middleware('checkSuperAdmin');
        Route::get(
            '/departments/{department_id}',
            'TagsController@indexByDepartment'
        )
            ->middleware('checkTenantAdminForDepartment');
        Route::get('/{tag_id}', 'TagsController@view');
        Route::post('/{department_id}', 'TagsController@store')
            ->middleware('checkTenantAdminForDepartment');
        Route::put('/{tag_id}', 'TagsController@update')
            ->middleware('checkTenantAdminForTag');
        Route::delete('/{tag_id}', 'TagsController@destroy')
            ->middleware('checkTenantAdminForTag');
    });

    // Courses
    Route::middleware('auth:api')->prefix('courses')->group(function () {
        Route::get('/', 'CoursesController@index')
            ->middleware('checkSuperAdmin');
        Route::get('/helix', 'CoursesController@indexHelix')
            ->middleware('checkHelixAdmin');
        Route::get('/tenant', 'CoursesController@indexTenant')
            ->middleware('checkTenantAdmin');
        Route::get(
            '/department/{department_id}',
            'CoursesController@indexDepartment'
        )
            ->middleware('checkTenantAdminForDepartment');
        Route::post(
            '/department/{department_id}/filtered',
            'CoursesController@indexFiltered'
        )
            ->middleware('checkTenantUser');
        Route::get('/{id}', 'CoursesController@show')
            ->middleware('checkTenantAdminForCourse');
        Route::post('/{department_id}', 'CoursesController@store')
            ->middleware('checkTenantAdminForDepartment');
        Route::put('/{id}', 'CoursesController@update')
            ->middleware('checkTenantAdminForCourse');
        Route::delete('/{id}', 'CoursesController@destroy')
            ->middleware('checkTenantAdminForCourse');
    });

    // Categories
    Route::middleware('auth:api')->prefix('categories')->group(function () {
        Route::get('/', 'CategoriesController@index')
            ->middleware('checkAdmin');
        Route::get('/helix', 'CategoriesController@indexHelix')
            ->middleware('checkHelixAdmin');
        Route::get(
            '/department/{department_id}',
            'CategoriesController@IndexByDepartment'
        )
            ->middleware('checkTenantAdminForDepartment');
        Route::get('/tenant/{id}', 'CategoriesController@IndexByTenant')
            ->middleware('checkTenantAdminForTenant');
        Route::get('/selected', 'CategoriesController@getSelected')
            ->middleware('checkTenantUser');
        Route::get('/{id}', 'CategoriesController@show')
            ->middleware('checkTenantAdminForCategory');
        Route::post('/', 'CategoriesController@store')
            ->middleware('checkTenantAdminForCategoryToStore');
        Route::post('/store-selected', 'CategoriesController@storeSelected')
            ->middleware('checkTenantUserForCategoryToStoreSelected');
        Route::put('/update-selected', 'CategoriesController@editSelected')
            ->middleware('checkTenantUserForCategoryToUpdateSelected');
        Route::put('/{id}', 'CategoriesController@update')
            ->middleware('checkTenantAdminForCategoryToUpdate');
        Route::delete('/{id}', 'CategoriesController@destroy')
            ->middleware('checkTenantAdminForCategory');
    });

    //Addresses
    Route::middleware(['auth:api'])->prefix('addresses')
        ->group(function () {
            Route::get('/', 'AddressesController@index')
                ->middleware('checkAdmin');
            Route::get('/company/{company_id}', 'AddressesController@indexById')
                ->middleware('checkCompanyManagerAndAdmin');
            Route::get('/{id}', 'AddressesController@view')
                ->middleware('checkCompanyManagerByAddress');
            Route::post('/', 'AddressesController@store')
                ->middleware('checkCompanyManagerAndAdmin');
            Route::put('/{id}', 'AddressesController@update')
                ->middleware('checkCompanyManagerByAddress');
            Route::delete('/{id}', 'AddressesController@destroy')
                ->middleware('checkCompanyManagerByAddress');
        });

    //Company Users
    Route::middleware(['auth:api'])->prefix('companyUsers')->group(function () {
        Route::get('/', 'CompanyUsersController@index')
            ->middleware('checkSuperAdmin');
        Route::get('/by-tenant/{id}', 'CompanyUsersController@indexByTenant')
            ->middleware('checkTenantAdminForTenant');
        Route::get('/{id}', 'CompanyUsersController@view')
            ->middleware('checkTenantAdminForCompanyUser');
        Route::post('/', 'CompanyUsersController@store')
            ->middleware('checkTenantAdmin');
        Route::put('/{id}', 'CompanyUsersController@update')
            ->middleware('checkTenantAdminForCompanyUser');
        Route::delete('/{id}', 'CompanyUsersController@destroy')
            ->middleware('checkTenantAdminForCompanyUser');
    });

    //Logo
    Route::middleware(['auth:api'])->prefix('logo')
        ->group(function () {
            Route::get('/', 'LogosController@index')
                ->middleware('checkSuperAdminAndHelixAdmin');
            Route::get('/tenant/{tenant_id}', 'LogosController@show');
            Route::post('/', 'LogosController@store')
                ->middleware('checkTenantAdmin');
            Route::put('/tenant/{tenant_id}', 'LogosController@update')
                ->middleware('checkTenantAdminForTenant');
            Route::delete('/tenant/{tenant_id}', 'LogosController@destroy')
                ->middleware('checkTenantAdmin');
            Route::put('/', 'LogosController@status')
                ->middleware('checkSuperAdminAndHelixAdmin');
        });

    //Contact
    Route::middleware(['auth:api'])->prefix('contacts')
        ->group(function () {
            Route::get('/', 'ContactsController@index')
                ->middleware('checkAdmin');
            Route::get('/company/{company_id}', 'ContactsController@indexById')
                ->middleware('checkCompanyManagerAndAdmin');
            Route::get('/{id}', 'ContactsController@view')
                ->middleware('checkCompanyManagerByContact');
            Route::post('/', 'ContactsController@store')
                ->middleware('checkCompanyManagerAndAdmin');
            Route::put('/{id}', 'ContactsController@update')
                ->middleware('checkCompanyManagerByContact');
            Route::delete('/{id}', 'ContactsController@destroy')
                ->middleware('checkCompanyManagerByContact');
        });

    // Departments
    Route::middleware('auth:api')->prefix('departments')->group(function () {
        Route::get('/', 'DepartmentsController@index')
            ->middleware('checkAdmin');
        Route::get('/tenants/{id}', 'DepartmentsController@indexByTenant')
            ->middleware('checkTenantAdminForTenant');
        Route::get('/{department_id}', 'DepartmentsController@show')
            ->middleware('checkTenantAdminForDepartment');
        Route::post('/', 'DepartmentsController@store')
            ->middleware('checkTenantAdmin');
        Route::put('/{department_id}', 'DepartmentsController@update')
            ->middleware('checkTenantAdminForDepartment');
        Route::delete('/{department_id}', 'DepartmentsController@destroy')
            ->middleware('checkTenantAdminForDepartment');
    });

    //Brand Primary Colour
    Route::middleware(['auth:api'])->prefix('brandColours')
        ->group(function () {
            Route::get('/', 'BrandPrimaryColoursController@index')
                ->middleware('checkSuperAdmin');
            Route::get('/{id}', 'BrandPrimaryColoursController@show')
                ->middleware('checkByBrandColour');
            Route::post('/', 'BrandPrimaryColoursController@store')
                ->middleware('checkTenantAdminForBrandColour');
            Route::put('/{id}', 'BrandPrimaryColoursController@update')
                ->middleware('checkByBrandColour');
            Route::delete('/{id}', 'BrandPrimaryColoursController@destroy')
                ->middleware('checkByBrandColour');
            Route::put('/activate/{id}', 'BrandPrimaryColoursController@activate')
                ->middleware('checkSuperAdmin');
        });

    //Intro Cards
    Route::middleware(['auth:api'])->prefix('introCards')
        ->group(function () {
            Route::get('/', 'IntroCardsController@index')
                ->middleware('checkSuperAdmin');
            Route::get('/tenants/{tenant_id}', 'IntroCardsController@show');
            Route::post('/', 'IntroCardsController@store')
                ->middleware('checkTenantAdminForBrandColour');
            Route::put('/tenants/{tenant_id}', 'IntroCardsController@update')
                ->middleware('checkTenantAdminForBrandColour');
            Route::delete('tenants/{tenant_id}', 'IntroCardsController@destroy')
                ->middleware('checkTenantAdminForBrandColour');
            Route::put('/activate/{id}', 'IntroCardsController@activate')
                ->middleware('checkSuperAdmin');
        });

    //Outro Cards
    Route::middleware(['auth:api'])->prefix('outroCards')
        ->group(function () {
            Route::get('/', 'OutroCardsController@index')
                ->middleware('checkSuperAdmin');
            Route::get('/tenants/{tenant_id}', 'OutroCardsController@show');
            Route::post('/', 'OutroCardsController@store')
                ->middleware('checkTenantAdminForBrandColour');
            Route::put('/tenants/{tenant_id}', 'OutroCardsController@update')
                ->middleware('checkTenantAdminForBrandColour');
            Route::delete('tenants/{tenant_id}', 'OutroCardsController@destroy')
                ->middleware('checkTenantAdminForBrandColour');
            Route::put('/activate/{id}', 'OutroCardsController@activate')
                ->middleware('checkSuperAdmin');
        });

    //Onboarding For Mobile App
    Route::get(
        'onboarding/departments/{department_id}',
        'OnboardingSequencesController@showByDepartment'
    )
        ->middleware(['auth:api', 'checkCompanyUser']);

    //Onboarding Sequences
    Route::middleware(['auth:api', 'checkTenantAdminForOnboardingSequence'])
        ->prefix('onboardingSequences')
        ->group(function () {
            Route::get(
                '/departments/{department_id}',
                'OnboardingSequencesController@show'
            );
            Route::post('/', 'OnboardingSequencesController@store');
            Route::put(
                '/departments/{department_id}',
                'OnboardingSequencesController@update'
            );
            Route::delete(
                '/departments/{department_id}',
                'OnboardingSequencesController@destroy'
            );
        });

    //mocks
    Route::middleware(['auth:api'])->prefix('mocks')
        ->group(function () {
            Route::get(
                '/userDepartments/users/{id}',
                'MocksController@getDepartmentIdByUserId'
            );
            Route::get(
                '/profiles/users/{user_id}',
                'MocksController@getUserProfile'
            );
            Route::put(
                '/profiles/users/{user_id}',
                'MocksController@updateUserProfile'
            );
            Route::get(
                '/onboarding/departments/{department_id}',
                'MocksController@getOnboarding'
            );
            Route::put(
                '/categories/users/{user_id}',
                'MocksController@chooseCategories'
            );
            Route::put(
                '/moodTracker/chooseFeeling/{feeling_id}',
                'MocksController@chooseFeeling'
            );
            Route::put(
                '/moodTracker/chooseReasons/users/{user_id}',
                'MocksController@chooseReasons'
            );
            Route::get('/courses', 'MocksController@getListOfCourses');
            Route::put(
                '/courses/choose/{course_id}',
                'MocksController@chooseCourses'
            );
        });

    //Course Widget Type
    Route::middleware(['auth:api'])->prefix('courseWidgetTypes')
        ->group(function () {
            Route::get('/', 'CourseWidgetTypesController@index');
            Route::get('/{id}', 'CourseWidgetTypesController@show');
            Route::post('/', 'CourseWidgetTypesController@create');
            Route::put('/{id}', 'CourseWidgetTypesController@edit');
            Route::delete('/{id}', 'CourseWidgetTypesController@delete');
        });

    //Goals
    Route::middleware(['auth:api'])->prefix('goals')
        ->group(function () {
            Route::get('/', 'GoalsController@index');
            Route::get('/{id}', 'GoalsController@show');
            Route::post('/', 'GoalsController@store');
            Route::put('/{id}', 'GoalsController@update');
            Route::delete('/{id}', 'GoalsController@destroy');
        });

    //Notes
    Route::middleware(['auth:api'])->prefix('notes')
        ->group(function () {
            Route::get('/', 'NotesController@index');
            Route::get('/{id}', 'NotesController@show');
            Route::post('/', 'NotesController@store');
            Route::put('/favourite/{id}', 'NotesController@favourite');
            Route::put('/{id}', 'NotesController@update');
            Route::delete('/{id}', 'NotesController@destroy');
        });

    //Mood Tracker
    Route::middleware(['auth:api'])->prefix('moodTrackers')
        ->group(function () {
            Route::get('/', 'MoodTrackersController@index');
            Route::get('/withStatistics', 'MoodTrackersController@indexWithStatistics');
            Route::get('/{id}', 'MoodTrackersController@show');
            Route::post('/', 'MoodTrackersController@store');
            Route::put('/{id}', 'MoodTrackersController@update');
            Route::delete('/{id}', 'MoodTrackersController@destroy');
        });

    //Mood Tracker Feelings
    Route::middleware(['auth:api'])->prefix('moodTrackerFeelings')
        ->group(function () {
            Route::get('/', 'MoodTrackerFeelingsController@index');
            Route::get('/getList', 'MoodTrackerFeelingsController@indexWithMoodTrackerSettings');
        });

    //Mood Tracker Activities
    Route::middleware(['auth:api'])->prefix('moodTrackerActivities')
        ->group(function () {
            Route::get('/', 'MoodTrackerActivitiesController@index');
            Route::post('/', 'MoodTrackerActivitiesController@store');
            Route::get('/getList', 'MoodTrackerActivitiesController@indexWithMoodTrackerSettings');
        });

    //Mood Tracker Settings
    Route::middleware(['auth:api'])->prefix('moodTrackerSettings')
        ->group(function () {
            Route::get('/tenant/{tenant_id}', 'MoodTrackerSettingsController@showByTenantId');
            Route::post('/', 'MoodTrackerSettingsController@store');
            Route::put('/{id}', 'MoodTrackerSettingsController@update');
            Route::delete('/{id}', 'MoodTrackerSettingsController@destroy');
        });
});

Route::prefix('cms/v1')->group(function () {

    // Cms Widgets - Single Question
    Route::middleware(['auth:api','checkAdmin'])->prefix('widgetSimpleQuestion')->group(function () {
        Route::get('/', 'Cms\V1\WidgetSimpleQuestionController@index');
        Route::get('/{id}', 'Cms\V1\WidgetSimpleQuestionController@show');
        Route::post('/', 'Cms\V1\WidgetSimpleQuestionController@store');
        Route::put('/{id}', 'Cms\V1\WidgetSimpleQuestionController@update');
        Route::delete('/{id}', 'Cms\V1\WidgetSimpleQuestionController@destroy');
    });

    // Cms Widgets - Free Text Question
    Route::middleware(['auth:api','checkAdmin'])->prefix('widgetFreeTextQuestion')->group(function () {
        Route::get('/', 'Cms\V1\WidgetFreeTextQuestionController@index');
        Route::get('/{id}', 'Cms\V1\WidgetFreeTextQuestionController@show');
        Route::post('/', 'Cms\V1\WidgetFreeTextQuestionController@store');
        Route::put('/{id}', 'Cms\V1\WidgetFreeTextQuestionController@update');
        Route::delete('/{id}', 'Cms\V1\WidgetFreeTextQuestionController@destroy');
    });
});


Route::prefix('cms/v1')->group(function () {
//Widget Image Answer
    Route::middleware(['auth:api'])->prefix('widget-image-answer')
        ->group(function () {
            Route::get('/', 'Cms\V1\WidgetImageAnswerController@index');
            Route::get('/{id}', 'Cms\V1\WidgetImageAnswerController@show');
            Route::post('/', 'Cms\V1\WidgetImageAnswerController@store');
            Route::put('/{id}', 'Cms\V1\WidgetImageAnswerController@update');
            Route::delete('/{id}', 'Cms\V1\WidgetImageAnswerController@destroy');
        });

//Widget Article
    Route::middleware(['auth:api'])->prefix('widget-article')
        ->group(function () {
            Route::get('/', 'Cms\V1\WidgetArticleController@index');
            Route::get('/{id}', 'Cms\V1\WidgetArticleController@show');
            Route::post('/', 'Cms\V1\WidgetArticleController@store');
            Route::put('/{id}', 'Cms\V1\WidgetArticleController@update');
            Route::delete('/{id}', 'Cms\V1\WidgetArticleController@destroy');
        });

//Widget Link External
    Route::middleware(['auth:api'])->prefix('widget-link-external')
        ->group(function () {
            Route::get('/', 'Cms\V1\WidgetLinkExternalController@index');
            Route::get('/{id}', 'Cms\V1\WidgetLinkExternalController@show');
            Route::post('/', 'Cms\V1\WidgetLinkExternalController@store');
            Route::put('/{id}', 'Cms\V1\WidgetLinkExternalController@update');
            Route::delete('/{id}', 'Cms\V1\WidgetLinkExternalController@destroy');
        });

//Widget Link Internal
    Route::middleware(['auth:api'])->prefix('widget-link-internal')
        ->group(function () {
            Route::get('/', 'Cms\V1\WidgetLinkInternalController@index');
            Route::get('/{id}', 'Cms\V1\WidgetLinkInternalController@show');
            Route::post('/', 'Cms\V1\WidgetLinkInternalController@store');
            Route::put('/{id}', 'Cms\V1\WidgetLinkInternalController@update');
            Route::delete('/{id}', 'Cms\V1\WidgetLinkInternalController@destroy');
        });

//Widget Media
    Route::middleware(['auth:api'])->prefix('widget-media')
        ->group(function () {
            Route::get('/', 'Cms\V1\WidgetMediaController@index');
            Route::get('/{id}', 'Cms\V1\WidgetMediaController@show');
            Route::post('/', 'Cms\V1\WidgetMediaController@store');
            Route::put('/{id}', 'Cms\V1\WidgetMediaController@update');
            Route::delete('/{id}', 'Cms\V1\WidgetMediaController@destroy');
        });

//Widget Slider Question
    Route::middleware(['auth:api'])->prefix('widget-slider-question')
        ->group(function () {
            Route::get('/', 'Cms\V1\WidgetSliderQuestionController@index');
            Route::get('/{id}', 'Cms\V1\WidgetSliderQuestionController@show');
            Route::post('/', 'Cms\V1\WidgetSliderQuestionController@store');
            Route::put('/{id}', 'Cms\V1\WidgetSliderQuestionController@update');
            Route::delete('/{id}', 'Cms\V1\WidgetSliderQuestionController@destroy');
        });

// Cms Modules
    Route::middleware(['auth:api', 'checkAdmin'])->prefix('modules')->group(function () {
        Route::get('/', 'Cms\V1\ModulesController@index');
        Route::get('/{id}', 'Cms\V1\ModulesController@show');
        Route::post('/', 'Cms\V1\ModulesController@store');
        Route::put('/{id}', 'Cms\V1\ModulesController@update');
        Route::delete('/{id}', 'Cms\V1\ModulesController@destroy');
    });

});
