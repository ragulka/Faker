<?php

namespace Faker\Provider\et_EE;

class Company extends \Faker\Provider\Company
{
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companyNameElement}} {{companySuffix}}',
        'FIE {{firstName}} {{lastName}}',
        '{{companySuffix}} {{lastName}} {{companyNameElement}}',
        '{{companySuffix}} {{firstName}} {{lastName}} {{companyNameElement}}',
    ];

    protected static array $companyNameElements = [
        'Agentuur', 'Arendus',
        'Disain',
        'Grupp',
        'Haldus', 'Holding', 'Hooldus',
        'Invest', 'Investeeringud',
        'Kauplused', 'Kinnistud',
        'Majutus', 'Marketing', 'Mets', 'Müük',
        'Paber',
        'Reklaam', 'Remont',
        'Teenused',
        'Tooted', 'Tsement', 'Tööstus', 'Turundus',
        'Ühing', 'Ühistu',
        'Valdus', 'Valdused'
    ];

    protected static $companySuffix = ['AS', 'OÜ', 'MTÜ', 'UÜ', 'TÜ', 'SA'];

    public static function companyNameElement(): string
    {
        return static::randomElement(static::$companyNameElements);
    }

    /**
     * @example 'Edasijõudnud 4.põlvkonna adapter'
     */
    protected static $catchPhraseWords = [
        [
            'Avatud arhitektuuriga', 'Avatud lähtekoodiga', 'Automatiseeritud',
            'Eelajalooline', 'Edasijõudnud', 'Eesrindlik',
            'Funktsioonipõhine',
            'Hajutatud', 'Horisontaalne',
            'Innovatiivne', 'Integreeritud', 'Intuitiivne', 'Iseseisev',
            'Jagatav', 'Juhtiv', 'Jälgitav',
            'Kasutajasõbralik', 'Kasutajakeskne', 'Keskendunud', 'Kliendikeskne', 'Kloonitud', 'Kohandatav', 'Kohanduv', 'Kohustuslik', 'Konfigureeritav', 'Kuluefektiivne', 'Kvaliteetne', 'Kvaliteedikeskne',
            'Laiendatud', 'Lukustatav',
            'Mitmekanaliline', 'Mitmekesine', 'Mitmekihiline', 'Mitmepoolne', 'Mitmetasandiline',
            'Näost-näkku',
            'Optimeeritud', 'Orgaaniline', 'Organiseeritud',
            'Pikendatud', 'Polariseeritud', 'Prognoositav', 'Proaktiivne', 'Progressiivne', 'Püsiv', 'Põhiline',
            'Rakendatud', 'Ristplatvormiline', 'Rohujuure tasandil',
            'Sujuv', 'Suurendatud', 'Sügav', 'Sisuline',
            'Tasakaalustatud', 'Täielikult seadistatav', 'Töökorras', 'Tsentraliseeritud', 'Turvaline',
            'Universaalne',
            'Valikuline', 'Visioonipõhine', 'Vähendatud',
            'Ühilduv', 'Ühtlane', 'Üldine',
            'Äriklassi',
        ],
        [
            '24-tunnine', '24/7', '3. põlvkonna', '4. põlvkonna', '5. põlvkonna', '6. põlvkonna',
            'aktiveeriv', 'analüüsiv', 'asümmeetriline', 'asünkroonne',
            'eraldi', 'esiplaanil', 'esitav',
            'globaalne',
            'heuristiline', 'hõlmav', 'hübriid',
            'interaktiivne',
            'järkjärguline', 'juhtiv', 'juhtivkant',
            'kahepoolne', 'klient-server', 'klienti juhtiv', 'koherentne', 'koosnev', 'kontekstipõhine', 'kohalik',
            'logistiline',
            'mahe', 'maksimeeritud', 'meetodiline', 'mobiilne', 'modulaarne', 'motiveeriv', 'multimeedia', 'mitmetahuline', 'mitmikseisundiline', 'mõjukas', 'mõõdetamatu',
            'neutraalne', 'nulltolerantsiga',
            'objektipõhine', 'optimaalne', 'optimeeriv',
            'pühendunud',
            'radikaalne', 'reaalajas', 'regionaalne', 'reageeriv', 'riiklik', 'selge mõtlemisega', 'sisupõhine', 'skaleeritav', 'suhtumispõhine', 'suunduv',
            'täisulatuses', 'täppishäälestatud', 'tõusuteel', 'tühistamata',
            'vajaduspõhine', 'vastastikkune', 'värsket mõtlemisega', 'võimendav', 'võrgustikuga ühendatud', 'ühtlane',
        ],
        [
            'adapter', 'ahel', 'algatus', 'algoritm', 'analüsaator', 'analüüs', 'andmebaas', 'andmehoidla', 'arhitektuur', 'arhiiv', 'avatud arhitektuur', 'avatud süsteem', 'ekstranet', 'ekstranet', 'emulatsioon',
            'funktsioon',
            'grupitarkvara',
            'hierarhia', 'hinnakujundusstruktuur',
            'hübriid',
            'internetilahendus',
            'juhtum',
            'kasutamine', 'kasutajaliides', 'käsukogumik', 'käsurida', 'käsitöö', 'kliendilojaalsus', 'klienditugi', 'kohtvõrk', 'kompleks', 'kontseptsioon', 'konglomeraat', 'krüpteerimine',
            'lahendus', 'lähenemine', 'liides', 'ligipääs', 'logistika',
            'maatriks', 'massiiv', 'migratsioon', 'moderaator', 'mudel', 'mõjuanalüüs', 'mõõdik', 'mõõdistus',
            'neuraalvõrk', 'navigatsioon', 'nulltolerants',
            'orkestreerimine',
            'paigaldus', 'paindlikkus', 'paradigma', 'paralleel', 'plokiahel', 'poliitika', 'portaal', 'programmeerimine', 'progress', 'projekt', 'projektsioon', 'protokoll', 'protsessi parandamine', 'püsivara',
            'raam', 'raamistik', 'rakendus', 'riistvara', 'sisevõrk', 'strateegia', 'struktuur', 'sünergia', 'süsteemi mootor', 'süsteem',
            'tarkvara', 'teenindustugi', 'tugi', 'turvatud ühendus',
            'valik', 'väljakutse', 'võimekus', 'võrguühendus',
        ],
    ];

    /**
     * @example 'turgude skaleeritav arendamine'
     */
    protected static $bsWords = [
        [
            'algatuste', 'arhitektuuri',
            'e-kaubanduse', 'e-kaubanduse', 'e-teenuste', 'e-äri',
            'funktsioonide',
            'kasutajate', 'kogemuste', 'kogukondade', 'kokkupuute', 'lahenduste',
            'liidese',
            'metoodika', 'mudelite', 'mõõdikute',
            'niši',
            'paradigmade', 'platvormi', 'portaali',
            'rakenduste', 'ribalaiuse',
            'sisu', 'skeemide', 'suhete', 'sünergia', 'süsteemide',
            'taristu', 'tarneahelate', 'tegevuskava', 'tehnoloogia', 'tulemuste', 'turgude',
            'väravate',
            'veebiteenuse', 'veebivalmiduse', 'võrgu',
        ],
        [
            '24/365', '24/7',
            'avatud lähtekoodiga',
            'B2B', 'B2C',
            'dünaamiline',
            'eesrindlik', 'efektiivne',
            'granulaarne',
            'hajutatud', 'holistiline',
            'integreeritud', 'intuitiivne', 'interaktiivne',
            'juhtmevaba', 'järgmise põlvkonna',
            'kaasahaarav', 'karbist välja', 'kasutajakeskne', 'kleepuv', 'koostööpõhine', 'kohandatud',
            'laiendatav', 'läbipaistev', 'lisandväärtuse', 'lõplik',
            'mahe', 'maailmatasemel', 'magnetiline', 'missioonikriitiline', 'mõjukas',
            'parim', 'puust ja punaseks', 'proaktiivne',
            'reaalajas', 'revolutsiooniline', 'ristmeedia', 'ristplatvormiline',
            'sünergiline', 'skaleeritav', 'strateegiline',
            'tipptasemel', 'tipptehnoloogiline', 'tugev',
            'üks-ühele', 'üldlevinud', 'ülemaailmne',
            'virtuaalne', 'viiruslik', 'võrgupõhine', 'võtmed-kätte', 'vertikaalne',
        ],
        [
            'arendamine', 'arhitektuur',
            'brändimine',
            'genereerimine',
            'hõlbustamine',
            'inkubatsioon', 'integreerimine', 'iteratsioon',
            'kasutamine', 'kasvamine', 'kiirendamine', 'koondamine', 'kujundamine',
            'lahendus', 'lahendamine', 'leiutamine',
            'maksimeerimine', 'maatriks', 'määratlemine',
            'omaksvõtmine', 'optimeerimine', 'orkestreerimine',
            'rahaks tegemine', 'rakendamine',
            'sihtimine', 'skaala', 'strateegia planeerimine', 'sündikaat', 'sünteesimine',
            'taaskasutus', 'tegelemine', 'tulemus', 'toimetamine', 'toode', 'tootmine',
            'uuendamine', 'uuendus',
            'vahendamine', 'võimaldamine', 'võrdlus', 'võrk', 'visualiseerimine', 'volitamine', 'voogedastamine',
            'üleminek', 'ümbertöötlemine',
        ],
    ];

    /**
     * @example 'Robust full-range hub'
     */
    public function catchPhrase()
    {
        $result = [];

        foreach (static::$catchPhraseWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return implode(' ', $result);
    }

    /**
     * @example 'integrate extensible convergence'
     */
    public function bs()
    {
        $result = [];

        foreach (static::$bsWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return implode(' ', $result);
    }

    public static function registrationCode() : string
    {
        return static::randomNumber(8, true);
    }

    /**
     * EE + 8 numbers + a modulus 7-3-1 check digit
     *
     * @see https://www.riigiteataja.ee/akt/186654
     *
     * @return string
     */
    public static function vat() : string
    {
        $baseNumber = static::randomNumber(8, true);

        return 'EE' . $baseNumber . static::calculateModulus731($baseNumber);
    }

    /**
     * Calculates the last check digit of a reference number.
     *
     * This is done according to a 7-3-1 algorithm.
     */
    protected static function calculateModulus731(string $number): int
    {
        $multipliers = [7, 3, 1];
        $multiplierIndex = 0;
        $sum = 0;

        $baseNumber = (string) $number;

        for ($i = strlen($baseNumber) - 1; $i >= 0; $i--) {
            if ($multiplierIndex === 3) {
                $multiplierIndex = 0;
            }

            $sum += ((int) ($baseNumber[$i])) * $multipliers[$multiplierIndex];
            $multiplierIndex++;
        }

        $checkDigit = 10 - $sum % 10;

        if ($checkDigit === 10) {
            $checkDigit = 0;
        }

        return $checkDigit;
    }
}
