# php-fw-survey-2015
The results of the annual PHP framework popularity survey of 2015

## Playing with the data

If you decide to use PHP to play with this data, I recommend [league/csv](http://csv.thephpleague.com).

## Data

The data is in the `dump` folder

### survey.csv

This is the main file. Contains all results, stripped of referrer and email.

### framework_by_country.csv

List of winning framework by country. Only countries with more than 50 votes are displayed.

### fw_score_personal.csv

List of frameworks and their vote counts, ordered by vote, for the personal choice category. Includes "other". Could use some work filtering the "other" stuff and combining into the predefined values.

### fw_score_work.csv

Same as above. Also still needs some cleaning.

## Helpers

Helpers are files I generated to help you with manipulating the data, either in PHP or in R.

### PHP Helpers

- `countries.php` returns an array of all countries in the survey, in order of appearance. The set is unique.

- `fields.php` contains the full names of the fields of the header of the CSV file. The one in `dump` is normalized for easier querying in R, and as such does not contain full names, but shortened and uniqueified ones

- `age_education.php` two functions that define age groups and education levels. Initially, Typeform put them in plan text into the fields of the CSV which wasted space. I replaced their full names with numeric references and built two functions to extract those names if needed. Note that the arrays are 1-based.

### CSV Helpers

- `countries.csv` is a single-column no-header list of countries appearing in the results, in order of appearance. The set is unique.

- `fields.csv` is a row of column names (see PHP Helpers -> `fields.php`) for why