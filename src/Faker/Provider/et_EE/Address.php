<?php

namespace Faker\Provider\et_EE;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = ['%##', '%#', '%', '%/%', '%#[abc]', '%[abc]'];

    protected static $streetSuffixLong = [
        'tänav', 'puiestee', 'maantee', 'tee',
    ];
    protected static $streetSuffixShort = [
        'tn.', 'pst.', 'mnt.'
    ];

    /**
     * @var array
     *
     * @see https://et.wikipedia.org/wiki/Eesti_linnad#Eesti_omavalitsuslike_linnade_loend
     */
    protected static $cityNames = [
        'Abja-Paluoja', 'Antsla',
        'Elva',
        'Haapsalu',
        'Jõgeva', 'Jõhvi',
        'Kallaste', 'Karksi-Nuia', 'Kehra', 'Keila', 'Kilingi-Nõmme', 'Kiviõli', 'Kohtla-Järve', 'Kunda', 'Kuressaare', 'Kärdla',
        'Lihula', 'Loksa',
        'Maardu', 'Mustvee', 'Mõisaküla',
        'Narva', 'Narva-Jõesuu',
        'Otepää',
        'Paide', 'Paldiski', 'Pärnu', 'Põltsamaa', 'Põlva', 'Püssi',
        'Rakvere', 'Rapla', 'Räpina',
        'Saue', 'Sillamäe', 'Sindi',
        'Tallinn', 'Tamsalu', 'Tapa', 'Tartu', 'Tõrva', 'Türi',
        'Valga', 'Viljandi', 'Võhma', 'Võru'
    ];

    /**
     * @var array
     *
     * @see https://et.wikipedia.org/wiki/Maakond
     */
    protected static $state = [
        'Harjumaa', 'Hiiumaa',
        'Ida-Virumaa',
        'Järvamaa', 'Jõgevamaa',
        'Läänemaa', 'Lääne-Virumaa',
        'Pärnumaa', 'Põlvamaa',
        'Raplamaa',
        'Saaremaa',
        'Tartumaa',
        'Valgamaa', 'Viljandimaa', 'Võrumaa'
    ];

    /**
     * @var array
     *
     * @see https://et.wikipedia.org/wiki/Riikide_loend
     */
    protected static $country = [
        "Afganistan", "Ahvenamaa", "Albaania", "Alžeeria", "Ameerika Samoa", "Ameerika Ühendriigid", "Andorra", "Angola", "Anguilla", "Antarktika", "Antigua ja Barbuda", "Araabia Ühendemiraadid", "Argentina", "Armeenia", "Aruba", "Ascensioni saar", "Aserbaidžaan", "Austraalia", "Austria",
        "Bahama", "Bahrein", "Bangladesh", "Barbados", "Belau", "Belgia", "Belize", "Benin", "Bermuda", "Bhutan", "Boliivia", "Bosnia ja Hertsegoviina", "Botswana", "Bouvet’ saar", "Brasiilia", "Briti India ookeani ala", "Briti Neitsisaared", "Brunei", "Bulgaaria", "Burkina Faso", "Burundi",
        "Ceuta ja Melilla", "Clippertoni saar", "Colombia", "Cooki saared", "Costa Rica", "Côte d’Ivoire", "Curaçao",
        "Diego Garcia", "Djibouti", "Dominica", "Dominikaani Vabariik",
        "Ecuador", "Eesti", "Egiptus", "Ekvatoriaal-Guinea", "El Salvador", "Eritrea", "Etioopia",
        "Falklandi saared", "Fidži", "Filipiinid", "Fääri saared",
        "Gabon", "Gambia", "Ghana", "Gibraltar", "Grenada", "Gruusia", "Gröönimaa", "Guadeloupe", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea-Bissau", "Guyana",
        "Haiti", "Heardi ja McDonaldi saared", "Hiina", "Hispaania", "Holland", "Hollandi Kariibi mere saared", "Honduras", "Hongkongi erihalduspiirkond", "Horvaatia",
        "Ida-Timor", "Iirimaa", "Iisrael", "India", "Indoneesia", "Iraak", "Iraan", "Island", "Itaalia",
        "Jaapan", "Jamaica", "Jeemen", "Jersey", "Jordaania", "Jõulusaar",
        "Kaimanisaared", "Kambodža", "Kamerun", "Kanaari saared", "Kanada", "Kasahstan", "Katar", "Keenia", "Kesk-Aafrika Vabariik", "Kiribati", "Komoorid", "Kongo DV", "Kongo Vabariik", "Kookossaared", "Kosovo", "Kreeka", "Kuuba", "Kuveit", "Kõrgõzstan", "Küpros",
        "Laos", "Leedu", "Lesotho", "Libeeria", "Liechtenstein", "Liibanon", "Liibüa", "Luksemburg", "Lõuna-Aafrika Vabariik", "Lõuna-Georgia ja Lõuna-Sandwichi saared", "Lõuna-Korea", "Lõuna-Sudaan", "Läti", "Lääne-Sahara",
        "Macau erihalduspiirkond", "Madagaskar", "Malaisia", "Malawi", "Maldiivid", "Mali", "Malta", "Mani saar", "Maroko", "Marshalli Saared", "Martinique", "Mauritaania", "Mauritius", "Mayotte", "Mehhiko", "Mikroneesia", "Moldova", "Monaco", "Mongoolia", "Montenegro", "Montserrat", "Mosambiik", "Myanmar (Birma)",
        "Namiibia", "Nauru", "Nepal", "Nicaragua", "Nigeeria", "Niger", "Niue", "Norfolk", "Norra",
        "Omaan",
        'Paapua Uus-Guinea', 'Pakistan', 'Palestiina alad', 'Panama', 'Paraguay', 'Peruu', 'Pitcairni saared', 'Poola', 'Portugal', 'Prantsuse Guajaana', 'Prantsuse Lõunaalad', 'Prantsuse Polüneesia', 'Prantsusmaa', 'Puerto Rico', 'Põhja-Korea', 'Põhja-Makedoonia', 'Põhja-Mariaanid',
        'Réunion', 'Roheneemesaared', 'Rootsi', 'Rumeenia', 'Rwanda',
        'Saalomoni Saared', 'Saint Helena', 'Saint Kitts ja Nevis', 'Saint Lucia', 'Saint Vincent ja Grenadiinid', 'Saint-Barthélemy', 'Saint-Martin', 'Saint-Pierre ja Miquelon', 'Saksamaa', 'Sambia', 'Samoa', 'San Marino', 'São Tomé ja Príncipe', 'Saudi Araabia', 'Seišellid', 'Senegal', 'Serbia', 'Sierra Leone', 'Singapur', 'Sint Maarten', 'Slovakkia', 'Sloveenia', 'Somaalia', 'Soome', 'Sri Lanka', 'Sudaan', 'Suriname', 'Svaasimaa', 'Svalbard ja Jan Mayen', 'Süüria',
        'Šveits',
        'Zimbabwe', 'Taani', 'Tadžikistan', 'Tai', 'Taiwan', 'Tansaania', 'Togo', 'Tokelau', 'Tonga', 'Trinidad ja Tobago', 'Tristan da Cunha', 'Tšaad', 'Tšehhi', 'Tšiili', 'Tuneesia', 'Turks ja Caicos', 'Tuvalu', 'Türgi', 'Türkmenistan',
        'Uganda', 'Ukraina', 'Ungari', 'Uruguay', 'USA Neitsisaared', 'Usbekistan', 'Uus-Kaledoonia', 'Uus-Meremaa',
        'Valgevene', 'Vanuatu', 'Vatikan', 'Venemaa', 'Venezuela', 'Vietnam',
        'Wallis ja Futuna',
        'Ühendkuningriik', 'Ühendriikide hajasaared'
    ];

    /**
     * @var array
     *
     * @see subset of https://et.wikipedia.org/wiki/Kategooria:Eesti_t%C3%A4navate_loendid
     */
    protected static array $street = [
        'Pikk', 'Lai', 'Rüütli', 'Vabaduse', 'Narva',
        'Tartu', 'Mustamäe', 'Pärnu', 'Viru', 'Harju',
        'Uus', 'Kinga', 'Aia', 'Mere', 'Supeluse', 'Hommiku', 'Päikese',
        'Juhkentali', 'Kadriorg', 'Magdaleena', 'Tondi', 'Sõle',
        'Kopli', 'Telliskivi', 'Suur-Karja', 'Väike-Karja', 'Roosikrantsi',
        'Gonsiori', 'Tõnismägi', 'Liivalaia', 'Luise', 'Tatari'
    ];

    protected static $cityFormats = [
        '{{cityName}}',
    ];

    protected static $streetAddressFormats = [
        '{{streetName}} talu',
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{streetSuffixShort}} {{buildingNumber}}',
        '{{streetName}} {{streetSuffixLong}} {{buildingNumber}}',
    ];

    protected static $addressFormats = [
        "{{streetAddress}}\n{{postcode}} {{city}}",
        "{{streetAddress}}\n{{postcode}} {{state}}",
    ];

    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }

    public function streetName()
    {
        return static::randomElement(static::$street);
    }

    public function streetSuffixShort()
    {
        return static::randomElement(static::$streetSuffixShort);
    }

    public function streetSuffixLong()
    {
        return static::randomElement(static::$streetSuffixLong);
    }

    /**
     * @example 'Harjumaa'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }

    public static function buildingNumber(): string
    {
        return static::regexify(self::numerify(static::randomElement(static::$buildingNumber)));
    }
}
