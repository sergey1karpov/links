<?php

namespace Tests\Feature;

use App\Models\Event;
use App\Models\Link;
use App\Models\User;
use App\Services\ColorConvertorService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\App;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class EventControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    private User $user;

    private Event $event;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->user = User::factory()->create();
        $this->event = Event::factory(['user_id' => $this->user->id])->create();
    }

    /**
     * GET Routes to links
     * @var array|string[]
     */
    public array $routes = [
        'allEvents',
        'createEventForm',
    ];

    public function test_user_acces_to_events_page()
    {
        $this->actingAs($this->user);

        foreach ($this->routes as $route) {
            $this->get(route($route, ['id' => $this->user->id]))->assertStatus(200);
        }
    }

    public function test_add_event()
    {
        $this->actingAs($this->user)->post(route('addEvent', ['id' => $this->user->id]), [
            'title'       => 'New Event',
            'city'        => 'Moscow',
            'description' => 'Lorem Ipsum',
            'location'    => 'St. James Park',
            'time' => $this->faker->time(),
            'date' => $this->faker->date(),
            'banner' => UploadedFile::fake()->image('photo.jpg', 500, 500)->size(100),
            'video'       => 'YouTube link',
            'media'       => 'VK player',
            'tickets'     => 'Buy tickets link',
            'user_id'     => $this->user->id,
            'link_id'     => 1,
            'location_font'         => 'Inter',
            'location_font_size'    => 15,
            'location_font_color'   => '#ffffff',
            'date_font'             => 'Inter',
            'date_font_size'        => 15,
            'date_font_color'       => '#ffffff',
            'transparency'          => 5,
            'background_color_rgba' => '255,255,255',
            'background_color_hex'  => '#ffffff',
            'event_round'           => 15,
            'location_text_shadow_color'  => '#000000',
            'location_text_shadow_blur'   => 11,
            'location_text_shadow_bottom' => 11,
            'location_text_shadow_right'  => 11,
            'date_text_shadow_color'      => '#ffffff',
            'date_text_shadow_blur'       => 11,
            'date_text_shadow_bottom'     => 11,
            'date_text_shadow_right'      => 11,
            'block_shadow'                => 11,
            'bold_city'     => true,
            'bold_location' => true,
            'bold_date'     => true,
            'bold_time'     => true,
        ]);

        $this->assertDatabaseHas('events', [
            'title' => 'New Event',
            'city' => 'Moscow',
            'user_id' => $this->user->id,
        ]);
    }

    public function test_update_event()
    {
        $this->actingAs($this->user)->patch(route('editEvent', ['id' => $this->user->id, 'event' => $this->event->id]), [
            'title'       => 'UPD New Event',
            'city'        => 'UPD Moscow',
            'description' => 'Lorem Ipsum',
            'location'    => 'St. James Park',
            'time' => $this->faker->time(),
            'date' => $this->faker->date(),
            'banner' => UploadedFile::fake()->image('photo.jpg', 500, 500)->size(100),
            'video'       => 'YouTube link',
            'media'       => 'VK player',
            'tickets'     => 'Buy tickets link',
            'user_id'     => $this->user->id,
            'link_id'     => 1,
            'location_font'         => 'Inter',
            'location_font_size'    => 15,
            'location_font_color'   => '#ffffff',
            'date_font'             => 'Inter',
            'date_font_size'        => 15,
            'date_font_color'       => '#ffffff',
            'transparency'          => 5,
            'background_color_rgba' => '255,255,255',
            'background_color_hex'  => '#ffffff',
            'event_round'           => 15,
            'location_text_shadow_color'  => '#000000',
            'location_text_shadow_blur'   => 11,
            'location_text_shadow_bottom' => 11,
            'location_text_shadow_right'  => 11,
            'date_text_shadow_color'      => '#ffffff',
            'date_text_shadow_blur'       => 11,
            'date_text_shadow_bottom'     => 11,
            'date_text_shadow_right'      => 11,
            'block_shadow'                => 11,
            'bold_city'     => true,
            'bold_location' => true,
            'bold_date'     => true,
            'bold_time'     => true,
        ]);

        $this->assertEquals('UPD New Event', Event::first()->title);
        $this->assertEquals('UPD Moscow', Event::first()->city);
        $this->assertEquals($this->user->id, Event::first()->user_id);
    }

    public function test_manual_delete_event()
    {
        $response = $this->actingAs($this->user)->delete(route('deleteEvent', ['id' => $this->user->id, 'event' => $this->event->id]));

        $response->assertStatus(302);

        $this->assertEquals(0, Event::count());
    }

    public function test_mass_update_events()
    {
        $this->withoutExceptionHandling();

        Event::factory(10, ['user_id' => $this->user->id])->create();

        $this->actingAs($this->user)->patch(route('editAllEvent', ['id' => $this->user->id]), [
            'location_font' => 'Inter',
            'location_font_size' => 1.1,
            'user_id' => $this->user->id,
            'background_color_hex' => ColorConvertorService::convertBackgroundColor('#ffffff'),
        ]);

        $events = Event::all();

        foreach($events as $event) {
            $this->assertEquals('Inter', $event->location_font);
            $this->assertEquals(1.1, $event->location_font_size);
            $this->assertEquals($this->user->id, $event->user_id);
        }
    }

    public function test_full_text_search()
    {
        App::setLocale('RU');

        Event::factory(20, ['user_id' => $this->user->id])->create();

        Event::factory(['user_id' => $this->user->id, 'title' => 'My event'])->create();

        $this->assertCount(22, Event::all());

        $this->assertDatabaseHas('events',['title' => 'My event'])->get(route('searchEvent', ['id' => $this->user->id]));
    }
}
