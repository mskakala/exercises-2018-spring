function Book(title) {

    this.title = title;
    this.genres = [];
    this.author = {
        first_name: null,
        last_name: null,
        year_of_birth: null
    }
    this.editions = [];
    this.bookmark = null;

    this.open = function() {
        console.log('Opening the book');
    }

    this.setBookmark = function(page_nr) {
        this.bookmark = page_nr;
    }

    this.read = function() {
        if(this.bookmark == null) {
            console.log('Starting to read ' + this.title + ' on page 1');
        } else {
            console.log('Resuming reading ' + this.title + ' on page ' + this.bookmark);
        }
    }

    this.addEdition = function(new_edition) {
        this.editions.push(new_edition);
    }
}

var book = {
    title: 'Fifty Shades of Grey',
    genres: [
        'fantasy',
        'drama'
    ],
    author: {
        first_name: 'E L',
        last_name: 'James',
        year_of_birth: 1963
    },
    editions: [
        {
            edition_number: '1234567890',
            year_of_issue: 2012,
            nr_of_pages: 346
        },
        {
            edition_number: '0987654321',
            year_of_issue: 2015,
            nr_of_pages: 372
        }
    ],
    bookmark: null,

    
}