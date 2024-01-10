<?php

namespace Faker\Provider\et_EE;

use DateTime;

class Person extends \Faker\Provider\Person
{
    /**
     * @see https://news.err.ee/114745/most-popular-baby-names-of-2014
     * @see https://www.stat.ee/public/apps/nimed/TOP
     */
    protected static $firstNameMale = [
        'Andrei', 'Aleksei', 'Andres', 'Alexander', 'Aivar', 'Aleksander', 'Artur', 'Andrus', 'Ants', 'Artjom', 'Anatoli', 'Anton', 'Arvo', 'Aare', 'Ain', 'Aleksandr',
        'Dmitri', 'Daniil', 'Daniel',
        'Eduard', 'Erik', 'Enn',
        'Fjodorov',
        'Gennadi',
        'Heino', 'Henri', 'Hugo',
        'Igor', 'Indrek', 'Ivan', 'Ilja',
        'Jüri', 'Jaan', 'Jevgeni', 'Jaanus', 'Janek', 'Jaak',
        'Kristjan', 'Kalev', 'Karl', 'Kalle', 'Kaido', 'Kevin', 'Konstantin', 'Kaspar', 'Kirill', 'Kristo', 'Kalju', 'Kristofer',
        'Lauri', 'Lembit', 'Laur',
        'Martin', 'Margus', 'Maksim', 'Marko', 'Mati', 'Meelis', 'Mihhail', 'Marek', 'Mihkel', 'Mart', 'Madis', 'Markus', 'Mark', 'Marten',
        'Nikolai', 'Nikita', 'Nikolay',
        'Oleg', 'Oliver', 'Oskar',
        'Peeter', 'Priit', 'Pavel',
        'Rein', 'Roman', 'Raivo', 'Rasmus', 'Raul', 'Robert', 'Riho', 'Robin', 'Romet',
        'Sergei', 'Sander', 'Sergey', 'Siim', 'Silver', 'Sebastian',
        'Toomas', 'Tarmo', 'Tõnu', 'Tiit', 'Tanel', 'Taavi', 'Toivo', 'Tõnis',
        'Urmas', 'Ülo',
        'Vladimir', 'Viktor', 'Valeri', 'Vello', 'Vadim', 'Vitali', 'Vladislav', 'Vjatšeslav', 'Victor',
    ];

    /**
     * @see https://news.err.ee/114745/most-popular-baby-names-of-2014
     * @see https://www.stat.ee/public/apps/nimed/TOP
     */
    protected static $firstNameFemale = [
        'Aino', 'Aleksandra', 'Alisa', 'Anastasia', 'Anna', 'Anne', 'Anneli', 'Anu', 'Arina', 'Annika', 'Anastassia', 'Alla', 'Aili', 'Alina', 'Aime', 'Antonina',
        'Darja', 'Diana',
        'Elena', 'Eliise', 'Elisabeth', 'Emma', 'Ene', 'Eve', 'Eha', 'Evi',
        'Galina',
        'Hanna', 'Helen', 'Heli', 'Helle', 'Helgi',
        'Irina', 'Inna', 'Ingrid',
        'Jekaterina', 'Jelena', 'Julia', 'Jana',
        'Kadri', 'Katrin', 'Kristi', 'Kristiina', 'Kristina', 'Karin', 'Kersti', 'Kristel', 'Kaja', 'Külli', 'Kätlin', 'Krista',
        'Laura', 'Lenna', 'Liisa', 'Linda', 'Lisandra', 'Ljubov', 'Ljudmila', 'Liina', 'Ljudmilla', 'Larissa', 'Liis', 'Lea', 'Laine', 'Liudmila',
        'Maie', 'Malle', 'Mare', 'Maria', 'Marina', 'Marleen', 'Marta', 'Merike', 'Mia', 'Milana', 'Mirtel', 'Marika', 'Merle', 'Margit', 'Milvi', 'Maire', 'Margarita', 'Mari', 'Maarja',
        'Natalia', 'Niina', 'Nora', 'Natalja', 'Nadežda', 'Nina',
        'Olga', 'Oksana',
        'Piret', 'Polina', 'Pille',
        'Reet', 'Riina',
        'Sandra', 'Sirje', 'Sofia', 'Svetlana', 'Silvi',
        'Tamara', 'Tatiana', 'Tiina', 'Tiiu', 'Triin', 'Tatjana', 'Tiia',
        'Ülle', 'Urve',
        'Valentina', 'Viktoria', 'Veera', 'Veronika', 'Vaike',
        'Zinaida',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/Category:Estonian-language_surnames
     * @see https://www.stat.ee/public/apps/nimed/pere/TOP
     */
    protected static $lastName = [
        'Aleksejev', 'Andrejev', 'Allik', 'Aas', 'Aleksandrov', 'Aare', 'Aarma', 'Aas', 'Aasmäe', 'Aav', 'Aavik', 'Allik', 'Alver', 'Andrejeva', 'Aleksejeva', 'Aleksandrova', 'Allik', 'Aas',
        'Bogdanova', 'Bogdanov',
        'Eenpalu', 'Eskola',
        'Fjodorov', 'Fjodorov', 'Fjodorova', 'Fjodorova',
        'Grigorjev', 'Grigorjeva',
        'Hunt', 'Hein', 'Hein', 'Härma',
        'Ivanov', 'Ilves', 'Ilves', 'Ivanov', 'Ivanova', 'Ivanova', 'Ilves',
        'Jõgi', 'Jakobson', 'Jakovlev', 'Jürgenson', 'Jegorov', 'Järv', 'Johanson', 'Järve', 'Jakobson', 'Jänes', 'Järve', 'Järvis', 'Jõgi', 'Jõgi', 'Johanson', 'Jürgenson', 'Järv', 'Jakovleva', 'Jegorova', 'Järve', 'Jakobson',
        'Kuzmina', 'Kalda', 'Kozlova', 'Kruus', 'Kask', 'Kukk', 'Kuznetsov', 'Koppel', 'Kaasik', 'Kuusk', 'Karu', 'Kütt', 'Kallas', 'Kivi', 'Kangur', 'Kuusik', 'Kõiv', 'Kozlov', 'Kull', 'Kuzmin', 'Kalda', 'Kaaleste', 'Kaasik', 'Käbin', 'Kalda', 'Kaljulaid', 'Kaljurand', 'Kallas', 'Kallaste', 'Kangro', 'Kangur', 'Kapp', 'Kärner', 'Karu', 'Kask', 'Käsper', 'Kass', 'Keres', 'Keskküla', 'Kesküla', 'Kikkas', 'Kingsepp', 'Kirs', 'Kirsipuu', 'Kivi', 'Klavan', 'Kõiv', 'Kokk', 'Kontaveit', 'Koppel', 'Korjus', 'Kotkas', 'Kreek', 'Kross', 'Kruus', 'Kukk', 'Kull', 'Kütt', 'Kuusik', 'Kuusk', 'Kuznetsov', 'Kuznetsova', 'Kask', 'Kukk', 'Kuznetsova', 'Koppel', 'Kaasik', 'Kuusk', 'Karu', 'Kütt', 'Kallas', 'Kivi', 'Kuusik', 'Kangur', 'Kõiv', 'Kull',
        'Luik', 'Lepik', 'Lepp', 'Lõhmus', 'Liiv', 'Laur', 'Leppik', 'Lebedev', 'Laas', 'Laar', 'Laht', 'Lass', 'Laur', 'Laurits', 'Lemsalu', 'Lepik', 'Lepmets', 'Lepp', 'Leppik', 'Levandi', 'Liiv', 'Lill', 'Lindmaa', 'Linna', 'Lipp', 'Lippmaa', 'Lõhmus', 'Loo', 'Lõoke', 'Luik', 'Luts', 'Luik', 'Lepik', 'Lepp', 'Lõhmus', 'Laur', 'Liiv', 'Leppik', 'Lebedeva', 'Laas',
        'Männik', 'Mänd', 'Mitt', 'Makarova', 'Mägi', 'Mets', 'Mihhailov', 'Mölder', 'Morozov', 'Mitt', 'Männik', 'Mõttus', 'Mänd', 'Makarov', 'Mägi', 'Mälk', 'Mänd', 'Männik', 'Margiste', 'Mark', 'Masing', 'Mets', 'Mihhailov', 'Mihhailova', 'Mölder', 'Must', 'Mägi', 'Mets', 'Mihhailova', 'Mölder', 'Morozova',
        'Nikolajev', 'Nõmm', 'Nikitin', 'Novikov', 'Nõmmik', 'Nurme', 'Nurmsalu', 'Nõmm', 'Nikitina', 'Nikolajeva',
        'Orlova', 'Orav', 'Oja', 'Ots', 'Orav', 'Orlov', 'Oja', 'Olesk', 'Öpik', 'Orav', 'Ots', 'Oja', 'Ots',
        'Petrov', 'Pärn', 'Põder', 'Pavlov', 'Popov', 'Peterson', 'Puusepp', 'Paju', 'Põld', 'Pukk', 'Paas', 'Palm', 'Pääsuke', 'Padar', 'Pärn', 'Pavlov', 'Pavlova', 'Peebo', 'Peetre', 'Peterson', 'Petrov', 'Petrova', 'Pihlak', 'Piho', 'Piip', 'Põder', 'Põld', 'Popov', 'Popova', 'Poska', 'Puhvel', 'Pütsep', 'Puusepp', 'Petrova', 'Pärn', 'Pavlova', 'Põder', 'Peterson', 'Popova', 'Puusepp', 'Paas', 'Paju', 'Pukk', 'Parts', 'Palm', 'Põld',
        'Romanova', 'Rand', 'Roos', 'Rebane', 'Raudsepp', 'Raud', 'Rand', 'Roos', 'Rätsep', 'Raag', 'Raud', 'Raudsepp', 'Rebane', 'Reek', 'Reinsalu', 'Rooba', 'Roolaid', 'Rootare', 'Rummo', 'Rüütel', 'Rüütli', 'Rebane', 'Raudsepp', 'Raud',
        'Saar', 'Sepp', 'Smirnov', 'Stepanov', 'Semjonov', 'Sokolov', 'Sild', 'Sarapuu', 'Saks', 'Saar', 'Salumäe', 'Semjonov', 'Sepp', 'Sibul', 'Siimar', 'Simm', 'Sirel', 'Sisask', 'Smirnov', 'Smirnova', 'Sokk', 'Sokolov', 'Soosaar', 'Stepanov', 'Stepanova', 'Susi', 'Saar', 'Sepp', 'Smirnova', 'Stepanova', 'Sokolova', 'Saks', 'Sarapuu', 'Sild', 'Semjonova',
        'Tamme', 'Tomson', 'Tamm', 'Teder', 'Toom', 'Tomson', 'Tamme', 'Talts', 'Tamm', 'Tamme', 'Tarvas', 'Teder', 'Toom', 'Toome', 'Toots', 'Tamm', 'Teder', 'Toom',
        'Uibo', 'Uibo',
        'Vassiljev', 'Vaher', 'Volkov', 'Valk', 'Vaher', 'Vahtra', 'Vaino', 'Vainola', 'Välbe', 'Valdma', 'Väljas', 'Valk', 'Vassiljev', 'Vassiljeva', 'Vesik', 'Veski', 'Viiding', 'Vitsut', 'Võigemast', 'Volkov', 'Volkova', 'Võsu', 'Vassiljeva', 'Vaher', 'Volkova',
    ];


    /**
     * Map associating centuries with gender-digit pairs, used when generating a personal identity number.
     *
     * @var array|array[]
     */
    protected static array $genderCenturyDigitMap = [
        18 => ['male' => '1', 'female' => '2'],
        19 => ['male' => '3', 'female' => '4'],
        20 => ['male' => '5', 'female' => '6'],
        21 => ['male' => '7', 'female' => '8']
    ];


    /**
     * National Personal Identity Number (Isikukood)
     *
     * @see https://et.wikipedia.org/wiki/Isikukood
     *
     * @param DateTime|null $birthdate
     * @param string|null $gender Person::GENDER_MALE || Person::GENDER_FEMALE
     *
     * @return string using format GDDMMYYZZZQ, where G is the gender-based digit, DDMMYY is the date of birth, ZZZ the sequence number and Q the control character (checksum)
     */
    public function personalIdentityNumber(DateTime $birthdate = null, string $gender = null): ?string
    {
        // Check if a birthdate is provided, otherwise generate a random one
        if ($birthdate === null) {
            $birthdate = \Faker\Provider\DateTime::dateTimeThisCentury();
        }

        if ($gender === null) {
            $gender = self::GENDER_MALE;
        }

        // Determine the century when the person was born
        $century = intdiv((int) $birthdate->format('Y'), 100);

        // Determine first digit or return null if out of bounds
        if (empty($firstDigit = static::$genderCenturyDigitMap[$century][$gender] ?? null)) {
            return null;
        }

        // Format the birthdate as YYMMDD
        $birthdateFormatted = $birthdate->format('ymd');

        // Generate a random sequence of 3 digits
        $sequence = self::randomNumber(3, true);

        // Calculate the checksum
        $personalIdentityNumber = $firstDigit . $birthdateFormatted . $sequence;
        $checksum = 0;
        $multipliers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 1];

        for ($i = 0; $i < 10; $i++) {
            $checksum += (int) $personalIdentityNumber[$i] * $multipliers[$i];
        }

        $checksum %= 11;

        if ($checksum === 10) {
            return static::personalIdentityNumber($birthdate, $gender);
        }

        // Add the calculated checksum
        $personalIdentityNumber .= $checksum;

        return $personalIdentityNumber;
    }

}
