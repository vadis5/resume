<?php

namespace Tests;

use App\Models\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Storage;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Tear down after tests
     *
     * @return void
     */
    public function tearDown(): void
    {
        Schema::dropIfExists('settings');
        Schema::dropIfExists('media_file_to_tags');
        Schema::dropIfExists('media_files');
        Schema::dropIfExists('mood_tracker_setting_activities');
        Schema::dropIfExists('mood_tracker_setting_feelings');
        Schema::dropIfExists('mood_tracker_settings');
        Schema::dropIfExists('mood_tracker_to_activities');
        Schema::dropIfExists('mood_trackers');
        Schema::dropIfExists('mood_tracker_activities');
        Schema::dropIfExists('mood_tracker_feelings');
        Schema::dropIfExists('role_has_permissions');
        Schema::dropIfExists('model_has_permissions');
        Schema::dropIfExists('model_has_roles');
        Schema::dropIfExists('user_departments');
        Schema::dropIfExists('user_categories');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('company_users');
        Schema::dropIfExists('profiles');
        Schema::dropIfExists('completed');
        Schema::dropIfExists('course_tags');
        Schema::dropIfExists('course_categories');
        Schema::dropIfExists('tenant_tags');
        Schema::dropIfExists('tenant_courses');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('goals');
        Schema::dropIfExists('company_contacts');
        Schema::dropIfExists('address_companies');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('course_categories');
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('addresses');

        Schema::dropIfExists('widgets');
        Schema::dropIfExists('widget_simple_questions');
        Schema::dropIfExists('widget_free_text_questions');
        Schema::dropIfExists('widget_slider_questions');
        Schema::dropIfExists('widget_media_questions');
        Schema::dropIfExists('widget_media');
        Schema::dropIfExists('widget_media_answer_questions');
        Schema::dropIfExists('widget_articles');
        Schema::dropIfExists('widget_link_externals');
        Schema::dropIfExists('widget_link_internals');
        Schema::dropIfExists('widget_onboardings');
        Schema::dropIfExists('widget_settings');
        Schema::dropIfExists('module_sequences');
        Schema::dropIfExists('modules');
        Schema::dropIfExists('widget_types');
        Schema::dropIfExists('sequences');
        Schema::dropIfExists('sequence_types');

        Schema::dropIfExists('onboarding_sequences');
        Schema::dropIfExists('reward_icons');
        Schema::dropIfExists('onboarding_rewards');
        Schema::dropIfExists('tenant_onboarding_screens');
        Schema::dropIfExists('brand_primary_colours');
        Schema::dropIfExists('intro_cards');
        Schema::dropIfExists('outro_cards');
        Schema::dropIfExists('course_widget_types');
        Schema::dropIfExists('note_tags');
        Schema::dropIfExists('notes');
        Schema::dropIfExists('users');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('departments');
        Schema::dropIfExists('companies');

        Storage::disk('introCards')->delete(['test1.jpg', 'test2.jpg', 'test3.mp4']);
        Storage::disk('outroCards')->delete(['test1.jpg', 'test2.jpg', 'test3.mp4']);
        Storage::disk('onboardingWidgets')->delete(['/audio/audio.mp3', '/audio/audio2.mp3', '/image/image.jpeg',
            '/video/video.mp4','/video/video2.mp4']);

        $mediaFiles = Storage::disk('mediaLibrary')->allFiles();
        Storage::disk('mediaLibrary')->delete($mediaFiles);
    }

    /**
     * LoginUser
     *
     * @param array $data Array of email, password
     *
     * @return mixed
     */
    public function loginUser(array $data): string
    {
        // Check login
        $response = $this->post(
            'api/v1/auth/login',
            [
                'email'    => $data['email'],
                'password' => $data['password']
            ]
        );
        $users = User::all();

        $response->assertStatus(200);

        $responseJSON = json_decode($response->getContent(), true);
        $token        = "bearer " . $responseJSON['access_token'];

        $this->get(
            'api/v1/auth/me?token=' . $token,
            []
        )->assertJson(
            [
                'name'  => $data['name'],
                'email' => $data['email']
            ]
        )->isOk();

        return $token;
    }

    /**
     * Register User
     *
     * @param array $data Array of email, password
     *
     * @return mixed
     */
    public function registerUser(array $data): bool
    {
        $user           = new User();
        $user->name     = $data['name'];
        $user->email    = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();

        return true;
    }

    /**
     * Login Developer
     *
     * @param $role
     *
     * @return mixed
     */
    public function loginRole($role): string
    {
        $email_end = Config::get('tests.email_end');
        $password  = Config::get('tests.password');
        $arr       = explode('-', $role);
        $name      = ucwords(implode(' ', $arr));
        $data      = [
            'name'     => $name,
            'email'    => $role . '@' . $email_end,
            'password' => $password
        ];

        return $this->loginUser($data);
    }

    /**
     * Login user
     *
     * @param $email
     * @param $name
     *
     * @return mixed
     */
    public function loginByEmail($email, $name): string
    {
        $password  = Config::get('tests.password');

        $data      = [
            'name'     => $name,
            'email'    => $email,
            'password' => $password
        ];

        return $this->loginUser($data);
    }
}
