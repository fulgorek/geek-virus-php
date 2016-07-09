### Geekness Virus Challenge
Given a population of patients, determine the percentage of the population that is infected of the Geekness Virus. You will receive a list of files that contains patients DNA. Each DNA is in the form of a String composed of a sequence of characters A, C, G, T.

To determine if a patient is infected, the number of occurrences of ​T​ in their DNA needs to be greater than the number of all the other letters.

#### Example 1

In the sequence `TTTAACCGG`, we can determine that the patient is infected because:

- Ocurrences of A: 2
- Ocurrences of C: 2
- Ocurrences of G: 2
- Ocurrences of T: 3
T is the dominant letter in the sequence, therefore the patient `is infected`.

#### Example 2

In the sequence `TTCCGGAA`, we can determine that the patient is healthy because:

- Ocurrences of A: 2
- Ocurrences of C: 2
- Ocurrences of G: 2
- Ocurrences of T: 2
T is not the dominant letter, therefore the patient is `not infected`.

#### How to

Clone the repo:

`git clone git@github.com:fulgorek/geek-virus-php.git`

Open `run.php` and change your `email`

Execute:

run `$ php run.php`

##### voilà!


## License

Software licensed under the [MIT license](http://opensource.org/licenses/MIT).
