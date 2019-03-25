1. KOdėl Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, ‘1’) yra 6?

Pagal nutylėjimą nėra taikomas strict type režimas ir PHP pakeičia argumentų tipus į tuos, kurie nurodyti funkcijos argumentų sąraše (šiuo atveju '(int ...$numbers)'). Taigi gauti kintamieji pakeičiami į int tipo: 3, 2 ir 1, kurių suma yra 6. 

2. Kas ir kodėl nutiko bandant kviesti Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, ‘1’)?
Nustačius declare(strict_types = 1); funkcija priima tik kintamuosius, kurių tipas atitinka nurodytąjį prie funkcijos argumentų. Mūsų atveju tik pirmas kintamasis yra tinkamo integer tipo, o kiti du - netinkami, dėl to išmetamas klaidos pranešimas ir programa sustabdoma. 

3. KOdėl var_dump('php' == 0); yra true?
PHP bando paversti stringą 'php' į integer tipo, dėl to gaunamas 0, kuris palyginus su 0 yra tiesa arba 'true'.
