## About School Library

 This Application is a mini library api for school books

## ENDPOINTS

- GET /books
    This returns all books in the Library

- POST /newbook
    with form data
    <pre>
        {
            'title'      : 'Nairobi',
            'author'     : 'Brian Busolo,
            'ISBN'       :  332423,
            'year'       : 1995
        }
    </pre>

- DELETE /book/:id

## Testing
``` bash
phpunit tests
```

## Credits

Schoo2 is maintained by `Surajudeen AKANDE`.


