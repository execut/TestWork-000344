<?php
/**
 * @author Mamaev Yuriy (eXeCUT)
 * @link https://github.com/execut
 * @copyright Copyright (c) 2020 Mamaev Yuriy (eXeCUT)
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */

namespace Tests\Feature\Api;

use App\Models\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthorsTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_authors_list()
    {
        $authors = Author::factory()->count(3)->create();
        $response = $this->json('GET', '/api/authors');
        $response->assertStatus(200);
        $response->assertJsonFragment(['id' => $authors[0]->id]);
        $response->assertJsonFragment(['name' => $authors[0]->name]);
        $response->assertJsonFragment(['id' => $authors[1]->id]);
        $response->assertJsonFragment(['id' => $authors[2]->id]);
    }

    public function test_author_create()
    {
        $data = [
            'name' => 'Alexander Pushkin',
        ];

        $this->json('POST', '/api/authors', $data)
            ->assertStatus(200)
            ->assertSeeText('Author created!');
        $this->assertNotNull(Author::find($data));
    }

    public function test_author_get()
    {
        $author = Author::factory()->create();
        $this->json('GET', '/api/authors/' . $author->id)
            ->assertStatus(200)
            ->assertJson($author->toArray());
    }

    public function test_author_update()
    {
        $author = Author::factory()->create();

        $data = [
            'name' => 'Alexander Pushkin',
        ];

        $this->json('PUT', '/api/authors/' . $author->id, $data)
            ->assertStatus(200)
            ->assertSeeText('Author updated!');
    }

    public function test_author_delete()
    {
        $author = Author::factory()->create();

        $this->json('DELETE', '/api/authors/' . $author->id)
            ->assertStatus(200)
            ->assertSeeText('Author deleted!');
        $this->assertNull(Author::find($author->id));
    }
}
