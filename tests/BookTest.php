<?php

class BookTest extends TestCase
{
    /**
     * Test that all books are returned
     *
     * @return json
     */
    public function testAllBooksFound()
    {
        $this->json('GET', '/books')
            ->seeJson([
                'title' => 'Andela',
            ])
            ->assertResponseOk();
    }

    /**
     * Test that a book can be created
     *
     * @return json
     */
    public function testBookCanBeCreated()
    {
        $this->json('POST', '/newbook',
            ['title' => 'Lagos',
                'author' => 'Sirolad',
                'isbn'   => '1779',
                'year'   => '2016',
            ])
            ->see('Book successfully created')
            ->assertResponseOk();
    }

    /**
     * Test that a book can be deleted
     *
     * @return json
     */
    public function testBookCanBeDeleted()
    {
        $this->json('DELETE', '/book/19')
            ->see('Book Successfully deleted')
            ->assertResponseOk();
    }

    /**
     * Test that a deleted book can't be found
     *
     * @return json
     */
    public function testDeletedBookCantBeFound()
    {
        $this->json('DELETE', '/book/2')
            ->see('Book does not exist.')
            ->assertResponseStatus(404);
    }

}
