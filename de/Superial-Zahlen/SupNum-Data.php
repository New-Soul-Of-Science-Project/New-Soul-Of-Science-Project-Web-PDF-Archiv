<?php
  $SupNum_g_Site_ary = array(
    'OM:SupNum:' =>
      array_merge(
        $nSOSp_g_info_wolfgangHuss,
        array( url_abs => 'https://nsosp.org/de/Superial-Zahlen/',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/',
      favicons_url_rel_opt => $Glo_PathRel_back.'../de/Superial-Zahlen/favicon/',
      name_short => 'SupZahl',
      font_ary => array(
        '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
        '<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
      ),
      header_bgcolor => '#FFFFFF',
      header_pict_name => 'SN/SN_header_v03-01.jpg',
      header_pict_width => '930px',
      header_pict_height => '177px',
      header_pict_bgcolor => '#FFFFFF',
      header_pict_alt => 'Superial-Zahlen, mit Primzahlen ins Unendliche',
      header_links_marginLeft => '398px',
      copy_right =>
        'Superial-Zahlen (SN) \\\\'."\n".
        '© 1988–2024 by \\\\'."\n".
        'Wolfgang Huß und \\\\'."\n".
        'Media Line Digital e.K. \\\\'."\n".
        'is licensed under \\\\'."\n".
        '\jump{OM:FrQFT:Impressum:CopyrightLizenz:Inhalt}{CC BY-ND 4.0}',
      litera_url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Literatur_de.php',
      litera_bibtex_url_rel => $Glo_PathRel_back.'../share/bibtex/quantum-flow-theory_bibliographie_v8_002.bib',
    )),
    'OM:SupNum:Home' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/index.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/index.php',
      titel => 'Superial-Zahlen (SN) - Deutsch',
      description => '\name[undertitle]{OM:SupNum:Home}. — \name[description]{OM:SupNum:Home}.',
      keywords => '',
      text_titel_h1 => 'Superial-Zahlen \color{*TitleAdd}{\small{(SN)}}',
      text_titel_short => 'Superial-Zahlen',
      text_undertitel_h2 => 'Die Zahlentheorie der Analysis – mit Primzahlen ins Unendliche',
      text_titel_discr_h3 => 'Ein aktual unendlicher angeordneter algebraischer Körper, als Erweiterung der realen algebraischen Zahlen, der der Unendlichkeit eine fundamentale, fraktale Struktur gibt – neue Ideen elementarer Mathematik',
      jump_ary => array(
        'OM:SupNum:Home:Inhalt' => array( headline_text => 'Inhalt', headline_text_short => 'Inhalt'),
        'OM:SupNum:Home:Lexikon' => array( headline_text => 'Lexikon', headline_text_short => 'Lexikon'),
      ),
    ),
    'OM:SupNum:Ableitungen-Integrale' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/Ableitungen-und-Integrale-aktuale-Unendlichkeit-ersetzt-Limes.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Ableitungen-und-Integrale-aktuale-Unendlichkeit-ersetzt-Limes.php',
      titel => 'Ableitungen und Integrale - Die Superial-Zahlen (SN) - Deutsch',
      description => '\name[undertitle]{OM:SupNum:Ableitungen-Integrale}.\hidden{ — \name[description]{OM:SupNum:Ableitungen-Integrale}.}',
      keywords => '',
      text_titel_h1 => 'Ableitungen und Integrale',
      text_titel_short => 'Ableitungen und Integrale',
      text_undertitel_h2 => 'Aktuale Unendlichkeit ersetzt den Limes oder das Differential',
      text_titel_discr_h3 => '',
      jump_ary => array(
          // 'OM:SupNum:Ableitungen-Integrale:Vortext:X' => array( headline_text => 'X'/* , headline_text_short => 'X'*/),

        'OM:SupNum:Ableitungen-Integrale:Ableitung' => array( headline_text => 'Die Ableitung'/* , headline_text_short => 'X'*/),
          'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-mit-Limes' => array( headline_text => 'SN.AbIn.1'),
          'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-Limes-ist-s-hoch-minus-Eins' => array( headline_text => 'SN.AbIn.2'),
          'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-s-hoch-minus-Eins' => array( headline_text => 'SN.AbIn.3'),
          'OM:SupNum:Ableitungen-Integrale:Integration:Ableitung-Umkehrung-Integration' => array( headline_text => 'Die Ableitung ist die Umkehrung der Integration'/* , headline_text_short => 'X'*/),
          'OM:SupNum:Ableitungen-Integrale:Integration:Integration-Umkehrung-Ableitung' => array( headline_text => 'Die Integration als Umkehrung der Ableitung'/* , headline_text_short => 'X'*/),
          'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-s-hoch-minus-Eins-Kurznotation' => array( headline_text => 'SN.AbIn.4'),
          'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-basis' => array( headline_text => 'SN.AbIn.10'),
          'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-ausmultipliziert' => array( headline_text => 'SN.AbIn.11'),
          'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-subtrahiert' => array( headline_text => 'SN.AbIn.12'),
          'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-Ergebnis' => array( headline_text => 'SN.AbIn.13'),
          'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-basis' => array( headline_text => 'SN.AbIn.14'),
          'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-ausmultipliziert' => array( headline_text => 'SN.AbIn.15'),
          'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-subtrahiert' => array( headline_text => 'SN.AbIn.16'),
          'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-Ergebnis' => array( headline_text => 'SN.AbIn.17'),

        'OM:SupNum:Ableitungen-Integrale:Integration' => array( headline_text => 'Die Integration'/* , headline_text_short => 'X'*/),
          'OM:SupNum:Ableitungen-Integrale:Integration:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen' => array( headline_text => 'SN.AbIn.IN.1'),
          'OM:SupNum:Ableitungen-Integrale:Integration:Equ-Menge-natuerliche-Vorgaenger-xs' => array( headline_text => 'SN.AbIn.IN.2'),
          'OM:SupNum:Ableitungen-Integrale:Integration:Equ-Menge-natuerliche-Vorgaenger-xs-Elemente' => array( headline_text => 'SN.AbIn.IN.3'),
          'OM:SupNum:Ableitungen-Integrale:Integration:Equ-Def-Ableitung-mit-x-plus-s-tel-Kurznotation' => array( headline_text => 'SN.AbIn.IN.10'),
          'OM:SupNum:Ableitungen-Integrale:Integration:Equ-Aequ-Integral-mit-Summe-ueber-Intervall-Menge-a-bis-x-superial-kleiner-ganzer-Zahlen' => array( headline_text => 'SN.AbIn.IN.11'),
          'OM:SupNum:Ableitungen-Integrale:Integration:Equ-Def-Integrale-mit-s-hoch-minus-Eins-Kurznotation' => array( headline_text => 'SN.AbIn.IN.14'),
          'OM:SupNum:Ableitungen-Integrale:Integration:Beispiel-eines-konkreten-Integrals' => array( headline_text => 'Beispiel eines konkreten Integrals'/*, headline_text_short => 'X'*/),
          'OM:SupNum:Ableitungen-Integrale:Integration:Equ-Integriere-zu-x2-bis-auf-letzte-Summe' => array( headline_text => 'SN.AbIn.IN.19'),
          'OM:SupNum:Ableitungen-Integrale:Integration:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x' => array( headline_text => 'SN.AbIn.IN.21'),

        'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen' => array( headline_text => 'Nähere Untersuchung bestimmter Summen'/* , headline_text_short => 'X'*/),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Summen-zur-Integration-von-2x-plus-supkl-Eins' => array( headline_text => 'Summen zur Integration von \lm{ 〈2 x〉․〈1〉 }'/* , headline_text_short => 'X' */),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt' => array( headline_text => 'SN.AbIn.NU.1'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Direkte-Herleitung-der-angepassten-Gaussschen-Summenformel' => array( headline_text => 'Direkte Herleitung der angepassten Gaußschen Summenformel'/* , headline_text_short => 'X' */),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Menge-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x' => array( headline_text => 'SN.AbIn.NU.3'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-x' => array( headline_text => 'SN.AbIn.NU.4'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-mit-Summe-ungeloest-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins' => array( headline_text => 'SN.AbIn.NU.08'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-mit-Summe-geloest-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins' => array( headline_text => 'SN.AbIn.NU.09'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins' => array( headline_text => 'SN.AbIn.NU.10'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-y-mal-2-plus-x-zus-mal-omega-ist-erster-Summand' => array( headline_text => 'SN.AbIn.NU.19'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-erster-Summand-von-Integration-von-2x-plus-supkl-Eins' => array( headline_text => 'SN.AbIn.NU.25'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt-Anzahlausdruck-Differenz' => array( headline_text => 'SN.AbIn.NU.27'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt-Anzahlausdruck-Differenz-ausgeklammert' => array( headline_text => 'SN.AbIn.NU.28'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Doppelsummenausdruck-erster-Summand-von-Integration-von-2x-plus-supkl-Eins' => array( headline_text => 'SN.AbIn.NU.32'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-rationale-Zahlen-bisOhne-x' => array( headline_text => 'SN.AbIn.NU.39'),
      ),
    ),
    'OM:SupNum:Eigenschaften' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/Eigenschaften.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Eigenschaften.php',
      titel => 'Eigenschaften - Die Superial-Zahlen (SN) - Deutsch',
      description => '\name[undertitle]{OM:SupNum:Eigenschaften}. — \name[description]{OM:SupNum:Eigenschaften}.',
      keywords => '',
      text_titel_h1 => 'Eigenschaften',
      text_titel_short => 'Eigenschaften',
      text_undertitel_h2 => 'Welche Erkenntnisse können wir aus den Superial-Zahlen lernen?',
      text_titel_discr_h3 => '',
      jump_ary => array(
        'OM:SupNum:Eigenschaften:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                   
        'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen' => array( headline_text => 'Die sinnvollen Koeffizienten der Superial-Zahlen'/* , headline_text_short => 'X' */),
          'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Durch-Radikale-darstellbare-algebraischen-Zahlen-sinnvolle-Koeffizienten-SZ' => array( headline_text => 'Durch Radikale darstellbare algebraischen Zahlen sind sinnvolle Koeffizienten der Superial-Zahlen'/* , headline_text_short => 'X'*/),
          'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Equ-Realanteile-algebra-Zahlen-mal-s-verm-in-natuerl-SupZahlen' => array( headline_text => 'SN.Eig.SK.6'),
          'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Kehrwerte-der-Wurzeln' => array( headline_text => 'Die Kehrwerte der Wurzeln'/* , headline_text_short => 'X'*/),
          'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Ganzzahlige-Potenzen-der-Wurzeln' => array( headline_text => 'Ganzzahlige Potenzen der Wurzeln und ihrer Kehrwerte'/* , headline_text_short => 'X'*/),
          'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Summen-von-Wurzeln' => array( headline_text => 'Summen und Differenzen von Wurzeln'/* , headline_text_short => 'X' */),
                   
        'OM:SupNum:Eigenschaften:Was-lernen-wir-ueber-algebraische-Zahlen-durch-Superial-Zahlen' => array( headline_text => 'Was lernen wir über rationale beziehungsweise algebraische Zahlen'/* , headline_text_short => 'X' */),
                   
        'OM:SupNum:Eigenschaften:SIstAngeordneterKoerper' => array( headline_text => '\lm{ \mathbb{S} } ist ein angeordneter Körper', headline_text_short => 'S ist ein angeordneter Körper'),
                   
        'OM:SupNum:Eigenschaften:StrukturVonS' => array( headline_text => 'Die Struktur von \lm{ \s }', headline_text_short => 'Die Struktur von s'),
          'OM:SupNum:Eigenschaften:StrukturVonS:WasLernenUeberGroesseOmegaUndStrukturS' => array( headline_text => 'Was lernen wir über die Größe von \lm{ ω } und die Struktur von \lm{ \s } über die Frage der Vorgänger?', headline_text_short => 'Was lernen wir über die Größe von ω und die Struktur von s über die Frage der Vorgänger?'),
          'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s' => array( headline_text => 'SN.Eig.SVS.1'),
          'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Q-aus-Z' => array( headline_text => 'SN.Eig.SVS.8'),
          'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins' => array( headline_text => 'SN.Eig.SVS.10'),
          'OM:SupNum:Eigenschaften:StrukturVonS:Fig-OntologieGanzeZahlen' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
          'OM:SupNum:Eigenschaften:StrukturVonS:AusgangspunktPrimzahlproduktVerm' => array( headline_text => 'Ausgangspunkt der Primzahlprodukt-Vermutung'/* , headline_text_short => 'X' */),
          'OM:SupNum:Eigenschaften:StrukturVonS:Erklaer-Anzahl-endl-ganz-Zahlen' => array( headline_text => 'Erklärung der Anzahl der endlichen ganzen Zahlen durch ihren ontologischen Ursprung in den Biordinalzahlen'/* , headline_text_short => 'X' */),
          'OM:SupNum:Eigenschaften:StrukturVonS:Superiale-Basis-s-Menge-S-Bemerkenswerten-Zusammenhang' => array( headline_text => 'Die superiale Basis \lm{ \s } und die Menge \lm{ \mathbb{S} } haben einen ganz bemerkenswerten Zusammenhang' , headline_text_short => 'Die superiale Basis s und die Menge S haben einen ganz bemerkenswerten Zusammenhang'),
          'OM:SupNum:Eigenschaften:StrukturVonS:Equ-S_Z-ist-Element-K-unendlich-c' => array( headline_text => 'SN.Eig.SVS.29'),
          'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s-explizit' => array( headline_text => 'SN.Eig.SVS.31'),
          'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-omega-hoch-omega-explizit' => array( headline_text => 'SN.Eig.SVS.32'),
          'OM:SupNum:Eigenschaften:StrukturVonS:Equ-S_Z-ist-Element-K-unendlich-g' => array( headline_text => 'SN.Eig.SVS.35'),
                   
        'OM:SupNum:Eigenschaften:VergleichMitHyperreellenZahlen' => array( headline_text => 'Vergleich mit hyperreellen Zahlen'/* , headline_text_short => 'X' */),
                   
        'OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese' => array( headline_text => 'Untersuchungen zur Kontinuumshypothese'/* , headline_text_short => 'X' */),
          'OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese:Transzendente-Zahlen' => array( headline_text => 'Transzendente Zahlen'/* , headline_text_short => 'X' */),
      ),
    ),
    'OM:SupNum:Einleitung' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/Einleitung.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Einleitung.php',
      titel => 'Einleitung - Die Superial-Zahlen (SN) - Deutsch',
      description => 'Mit den Superial-Zahlen die fraktale Struktur des Unendlichen entdecken.',
      keywords => '',
      text_titel_h1 => 'Einleitung',
      text_titel_short => 'Einleitung',
      text_undertitel_h2 => 'Die Zahlentheorie der Analysis',
      text_titel_discr_h3 => 'Mit den Superial-Zahlen die fraktale Struktur des Aktual-Unendlichen entdecken',
      jump_ary => array(
        'OM:SupNum:Einleitung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                   
          'OM:SupNum:Einleitung:Vortext:Ableitung-genau-verstehen' => array( headline_text => 'Ableitung genau verstehen'/*, headline_text_short => 'X'*/),
          'OM:SupNum:Einleitung:Vortext:Integral-genau-verstehen' => array( headline_text => 'Integral genau verstehen'/*, headline_text_short => 'X'*/),
          // 'OM:SupNum:Einleitung:Vortext:Equ-Menge-natuerliche-Vorgaenger-xs' => array( headline_text => 'SN.Ein.3'),
          // 'OM:SupNum:Einleitung:Vortext:Equ-Menge-natuerliche-Vorgaenger-xs-Elemente' => array( headline_text => 'SN.Ein.4'),
          'OM:SupNum:Einleitung:Vortext:Equ-Menge-superial-kleine-ganze-Zahlen' => array( headline_text => 'SN.Ein.3'),
          // 'OM:SupNum:Einleitung:Vortext:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen' => array( headline_text => 'SN.Ein.6'),
          'OM:SupNum:Einleitung:Vortext:Integral-genau-verstehen:Konkretes-Integral' => array( headline_text => 'Konkretes Integral'/*, headline_text_short => 'X'*/),
          //%! 'OM:SupNum:Einleitung:Vortext:Equ-Integriere-zu-x2-bis-auf-letzte-Summe' => array( headline_text => 'SN.Ein.8'),
          //%! 'OM:SupNum:Einleitung:Vortext:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x' => array( headline_text => 'SN.Ein.10'),

          'OM:SupNum:Einleitung:Vortext:Fig-GeradeSuperialZahlen' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),

          'OM:SupNum:Einleitung:Vortext:Was-ist-unsere-neue-superiale-Basis-s' => array( headline_text => 'Was ist unsere neue superiale Basis \lm{ \s }?', headline_text_short => 'Was ist unsere neue superiale Basis s?'),
          'OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-N' => array( headline_text => 'SN.Ein.24'),
          'OM:SupNum:Einleitung:Vortext:Equ-omega-ist-Anzahl-in-N' => array( headline_text => 'SN.Ein.25'),
          'OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega' => array( headline_text => 'SN.Ein.26'),
          'OM:SupNum:Einleitung:Vortext:Equ-s-gleich-fuer-alle-in-N-Primzahl-Prod' => array( headline_text => 'SN.Ein.27'),
          'OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod' => array( headline_text => 'SN.Ein.28'),
          'OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Prod-hoch-omega' => array( headline_text => 'SN.Ein.29'),

        'OM:SupNum:Einleitung:Grundlagen' => array( headline_text => 'Grundlagen'/*, headline_text_short => 'X'*/),
          'OM:SupNum:Einleitung:Grundlagen:Ganze-Natuerl-Sup-Zahl-und-Integration' => array( headline_text => 'Definition ganzer und natürlicher Superial-Zahlen und die Integration'/*, headline_text_short => 'X'*/),

        'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn' => array( headline_text => 'Fragestellungen und perspektivischer Erkenntnisgewinn'/*, headline_text_short => 'X'*/),
          'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Ueberrationalitaetsvermutung' => array( headline_text => 'Überrationalitätsvermutung', headline_text_short => 'Überrationalitätsvermutung'),
          'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Primzahlenprodukt-Vermutung' => array( headline_text => 'Primzahlenprodukt-Vermutung', headline_text_short => 'Primzahlenprodukt-Vermutung'),
      ),
    ),
    'OM:SupNum:Eulersche-Zahl-e-Funktion' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/Eulersche-Zahl-e-Exponentialfunktion-Definition-mit-aktual-unendlichen-Zahlen.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Eulersche-Zahl-e-Exponentialfunktion-Definition-mit-aktual-unendlichen-Zahlen.php',
      titel => 'Die eulersche Zahl e und die e-Funktion - Die Superial-Zahlen (SN) - Deutsch',
      description => '\name[undertitle]{OM:SupNum:Eulersche-Zahl-e-Funktion}. — \name[description]{OM:SupNum:Eulersche-Zahl-e-Funktion}.',
      keywords => '',
      text_titel_h1 => 'Die eulersche Zahl e und ihre Exponentialfunktion',
      text_titel_short => 'Die eulersche Zahl e und ihre Exponentialfunktion',
      text_undertitel_h2 => 'Eine neue Definition von e und ihrer Exponentialfunktion über aktual unendliche Zahlen',
      text_titel_discr_h3 => 'Die transzendente Zahl e stellt sich als Zahl heraus, die so aktual unendlich kleine Summanden hat, dass sie nicht einmal zu den Superial-Zahlen erster Ordnung gehört',
      jump_ary => array(
        'OM:SupNum:Eulersche-Zahl-e-Funktion:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                   
        // 'OM:SupNum:Ableitungen-Integrale:Eulersche-Zahl-e-Funktion' => array( headline_text => 'Die eulersche Zahl \lm{ \e } und ihre \lm{ \e }-Funktion in der Differentialrechnung' , headline_text_short => 'Die eulersche Zahl e und ihre e-Funktion in der Differentialrechnung'),
          'OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-hoch-x-Def-durch-s-Stellenwertsystem' => array( headline_text => 'SN.EuZa.15'),
          'OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-hoch-x-Def-durch-s' => array( headline_text => 'SN.EuZa.19'),
          'OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-hoch-x-Def-durch-omega' => array( headline_text => 'SN.EuZa.20'),
          'OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:eFunktionPascalscheDreieck' => array( headline_text => 'Die \lm{ \e }-Funktion und das Pascalsche Dreieck' , headline_text_short => 'Die e-Funktion und das Pascalsche Dreieck'),
          'OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:SumBinominalkoe' => array( headline_text => 'Die Summen der einzelnen Spalten der Binomialkoeffizienten'/* , headline_text_short => 'X'*/),
          'OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-gleich-Stellenwertsystem' => array( headline_text => 'SN.EuZa.81'),
          'OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:BeispielrechnungAbleitungMit-s-2' => array( headline_text => 'Beispielrechnung zur Ableitung mit \lm{ s^2 }'/* , headline_text_short => 'X'*/),

        'OM:SupNum:Eulersche-Zahl-e-Funktion:Die-Transzendenz-der-eulerschen-Zahl-e' => array( headline_text => 'Die Transzendenz der eulerschen Zahl \lm{ \e }' , headline_text_short => 'Die Transzendenz der eulerschen Zahl e'),

        'OM:SupNum:Eulersche-Zahl-e-Funktion:Die-Quadratur-des-Kreises' => array( headline_text => 'Die Quadratur des Kreises – von der eulerschen Zahl \lm{ \e } zu \lm{ \pi }', headline_text_short => 'Die Quadratur des Kreises – von der eulerschen Zahl e zu π'),
      ),
    ),
    'OM:SupNum:Formale-Entwicklung' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/Formale-Entwicklung.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Formale-Entwicklung.php',
      titel => 'Formale Entwicklung - Die Superial-Zahlen (SN) - Deutsch',
      description => '\name[undertitle]{OM:SupNum:Formale-Entwicklung}.\hidden{ — \name[description]{OM:SupNum:Formale-Entwicklung}.}',
      keywords => '',
      text_titel_h1 => 'Formale Entwicklung',
      text_titel_short => 'Formale Entwicklung',
      text_undertitel_h2 => 'Definition der Superial-Zahlen und ihrer wichtigen Teilmengen',
      text_titel_discr_h3 => '',
      jump_ary => array(
        'OM:SupNum:Formale-Entwicklung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                   
          'OM:SupNum:Formale-Entwicklung:Vortext:Equ-Def-S-Polynom' => array( headline_text => 'SN.Form.1'),

        'OM:SupNum:Formale-Entwicklung:GanzeSZ' => array( headline_text => 'Ganze Superial-Zahlen'/* , headline_text_short => 'X' */),
        'OM:SupNum:Formale-Entwicklung:NatuerlicheSZ' => array( headline_text => 'Natürliche Superial-Zahlen'/* , headline_text_short => 'X' */),
        'OM:SupNum:Formale-Entwicklung:PrimSZ' => array( headline_text => 'Superiale Primzahlen'/* , headline_text_short => 'X' */),

        'OM:SupNum:Formale-Entwicklung:Formalien' => array( headline_text => 'Formalien'/* , headline_text_short => 'X' */),
          'OM:SupNum:Formale-Entwicklung:Formalien:Equ-alle-n-kleiner-s' => array( headline_text => 'SN.Form.F.14'),
          'OM:SupNum:Formale-Entwicklung:Formalien:Equ-exist-n-mit-r-kleiner-n' => array( headline_text => 'SN.Form.F.15'),
          'OM:SupNum:Formale-Entwicklung:Formalien:Zahlen-und-Mengen-im-Unendlichen' => array( headline_text => 'Zahlen und Mengen im Unendlichen'/*, headline_text_short => 'X'*/),
          'OM:SupNum:Formale-Entwicklung:Formalien:Stellenwertsystem' => array( headline_text => 'Stellenwertsystem'/* , headline_text_short => 'X' */),
          'OM:SupNum:Formale-Entwicklung:Formalien:Skalierung-Teilmenge-Superial-Zahlen' => array( headline_text => 'Skalierung der superialen Ebene einer Teilmenge der Superial-Zahlen'/* , headline_text_short => 'X' */),
          'OM:SupNum:Formale-Entwicklung:Formalien:Skalierung-Teilmenge-Superial-Zahlen:Equ-Menge-superiale-Ebene-skalieren' => array( headline_text => 'SN.Form.F.24'),
          'OM:SupNum:Formale-Entwicklung:Formalien:Intervall-Menge' => array( headline_text => 'Intervall-Menge'/* , headline_text_short => 'X' */),
      ),
    ),
    'OM:SupNum:Literatur' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/Literatur_de.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Literatur_de.php',
      titel => 'Literatur - Die Superial-Zahlen (SN) - Deutsch',
      description => 'Literatur zu den Superial-Zahlen.',
      keywords => '',
      text_titel_h1 => 'Literatur',
      text_titel_short => 'Literatur',
      text_undertitel_h2 => 'und Informationen',
      //text_titel_discr_h3 => 'Vereinheitlichte Physik auf Basis eines selbstorganisierten, fraktalen Systems von lichtähnlichen, zu Strings verbundenen Wirkungsquanten.',
      jump_ary => array(
      ),
    ),
    'OM:SupNum:Primzahlprodukt-Vermutung' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/Primzahlprodukt-Vermutung.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Primzahlprodukt-Vermutung.php',
      titel => 'Primzahlprodukt-Vermutung (Beweis) - Die Superial-Zahlen (SN) - Deutsch',
      description => '\name[undertitle]{OM:SupNum:Primzahlprodukt-Vermutung}. — \name[description]{OM:SupNum:Primzahlprodukt-Vermutung}.',
      keywords => '',
      text_titel_h1 => 'Primzahlprodukt-Vermutung \color{*TitleAdd}{\small{(Beweis)}}',
      text_titel_short => 'Primzahlprodukt-Vermutung',
      text_undertitel_h2 => 'Ist das Produkt aller endlichen Primzahlen, also die Primfakultät über alle Primzahlen in der Menge der natürlichen Zahlen, der Anzahl der natürlichen Zahlen gleich?',
      text_titel_discr_h3 => 'Eine Vorstellung der Vermutung und ihr Beweis',
      jump_ary => array(
        'OM:SupNum:Primzahlprodukt-Vermutung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),

          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Wir-vermuten-omega-ist-Produkt-aller-endlichen-Primzahlen' => array( headline_text => 'Wir vermuten, dass \lm{ ω } die vollständige Primfakultät aller endlichen Primzahlen ist' , headline_text_short => 'Wir vermuten, dass ω die vollständige Primfakultät aller endlichen Primzahlen ist'),
          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-Produkt-aller-endlichen-Primzahlen' => array( headline_text => 'SN.PP.6'),
          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-Fragezeichen-ist-omega-hoch-omega' => array( headline_text => 'SN.PP.7'),

          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Satz-des-Euklid' => array( headline_text => 'Satz des Euklid'/* , headline_text_short => 'X'*/),

          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-n-entspricht-pr-n' => array( headline_text => 'SN.PP.34'),
          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Beispiele-Primturmzerlegung-PrimturmPotenzraster+lueckenloses' => array( headline_text => 'Beispiele zur Primturmzerlegung, zum Primturm-Potenzraster und zum lückenlosen Primturm-Potenzraster'/* , headline_text_short => 'X'*/),
          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-pr-MengenPrimfakultaet-omega' => array( headline_text => 'SN.PP.89'),
          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-gleich-MengenPrimfakultaet-omega' => array( headline_text => 'SN.PP.131'),
          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-p-i-entspricht-MengenPrimfakultaet-p-i' => array( headline_text => 'SN.PP.132'),
          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-p-i-ist-lpr-MengenPrimfakultaet-p-i' => array( headline_text => 'SN.PP.136'),
          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-Definition-der-Menge-P-durch-p-Zaehlen' => array( headline_text => 'SN.PP.137'),
          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-lpr-MengenPrimfakultaet-omega-ist-omega' => array( headline_text => 'SN.PP.164'),
          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-MengenPrimfakultaet-omega' => array( headline_text => 'SN.PP.171'),
          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-allPrimzahlen' => array( headline_text => 'SN.PP.172'),
          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-allPrimfakultaet-omega' => array( headline_text => 'SN.PP.173'),
          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega' => array( headline_text => 'SN.PP.174'),

        'OM:SupNum:Primzahlprodukt-Vermutung:Diskussion' => array( headline_text => 'Diskussion des Beweises'/* , headline_text_short => 'X'*/),

        'OM:SupNum:Primzahlprodukt-Vermutung:ExperimentelleGedankenZuAnderenBeweiswegen' => array( headline_text => 'Experimentelle Gedanken zu anderen Beweiswegen'/* , headline_text_short => 'X'*/),
      ),
    ),
    'OM:SupNum:Struktur-Geometrie' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/Arithmetische-Struktur-der-Geometrie.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Arithmetische-Struktur-der-Geometrie.php',
      titel => 'Die arithmetische Struktur der Geometrie - Die Superial-Zahlen (SN) - Deutsch',
      description => '\name[undertitle]{OM:SupNum:Struktur-Geometrie}.\hidden{ — \name[description]{OM:SupNum:Struktur-Geometrie}.}',
      keywords => '',
      text_titel_h1 => 'Die arithmetische Struktur der Geometrie',
      text_titel_short => 'Die arithmetische Struktur der Geometrie',
      text_undertitel_h2 => 'Ein aktual unendliches Fraktal aus Primzahlteilen führt uns zur superialen Basis \lm{ \s }',
      text_titel_discr_h3 => '',
      jump_ary => array(
        'OM:SupNum:Struktur-Geometrie:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),

          'OM:SupNum:Struktur-Geometrie:Vortext:Alle-Strecken-natuerlichen-Zahlen-vernetzen' => array( headline_text => 'Alle Strecken der natürlichen Zahlen und schließlich der ganzen Zahlen vernetzen'/*, headline_text_short => 'X' */),
          'OM:SupNum:Struktur-Geometrie:Vortext:Equ-Abstand-des-Rasters-Zweiteilungen-mit-Potenz-omega' => array( headline_text => 'SN.ArGeo.32'),
          'OM:SupNum:Struktur-Geometrie:Vortext:Dies-gilt-fuer-alle-Wurzeln' => array( headline_text => 'Dies gilt sogar für alle Wurzeln aus natürlichen Zahlen und deren Potenzen \lm{ *( \sqrt[k]{c} *)^{m} }', headline_text_short => 'Dies gilt sogar für alle Wurzeln aus natürlichen Zahlen und deren Potenzen'),
          'OM:SupNum:Struktur-Geometrie:Vortext:DefinitionSuperialeEinheit' => array( headline_text => 'Die superiale Basis \lm{ \s } wird auf natürliche Weise sichtbar und definiert', headline_text_short => 'Die superiale Basis s wird auf natürliche Weise sichtbar und definiert'),
          'OM:SupNum:Struktur-Geometrie:Vortext:Fig-sGeomKonstruktWiederholung' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
          'OM:SupNum:Struktur-Geometrie:Vortext:Fig-sGeomKonstruktTeilung' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
          'OM:SupNum:Struktur-Geometrie:Vortext:Fig-GeradeSuperialZahlen' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
          'OM:SupNum:Struktur-Geometrie:Vortext:DasKontinuum' => array( headline_text => 'Das Kontinuum',/* headline_text_short => 'X' */),

        // 'OM:SupNum:Struktur-Geometrie:Diskussion' => array( headline_text => 'Diskussion'/* , headline_text_short => 'X' */),
      ),
    ),
    'OM:SupNum:Ueberrationalitaetsvermutung' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/Ueberrationalitaetsvermutung.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Ueberrationalitaetsvermutung.php',
      titel => 'Überrationalitätsvermutung (Beweis) - Die Superial-Zahlen (SN) - Deutsch',
      description => '\name[undertitle]{OM:SupNum:Ueberrationalitaetsvermutung}. — \name[description]{OM:SupNum:Ueberrationalitaetsvermutung}.',
      keywords => '',
      text_titel_h1 => 'Überrationalitätsvermutung \color{*TitleAdd}{\small{(Beweis)}}',
      text_titel_short => 'Überrationalitätsvermutung',
      text_undertitel_h2 => 'Lässt sich die \lm{ x }-te Wurzel aus \lm{ n }, wenn sie irrational ist, immer als Bruch mit aktual unendlich großem ganzen Nenner und Zähler ausdrücken?',
      text_titel_discr_h3 => 'Der folgende Beweis zeigt, die Antwort ist ja. Und zwar genau dann, wenn Nenner und Zähler aktual unendlich große ganze Zahlen sind, die wir beliebig endlich oft durch \lm{ n } teilen können, wie \lm{ n^{ω} }',
      jump_ary => array(
        'OM:SupNum:Ueberrationalitaetsvermutung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                   
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Zwei-mal-b-Quadrat-gleich-a-Quadrat' => array( headline_text => 'SN.ÜV.7'),
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-gleich-2-hoch-omega-mal-Wurzel-Zwei-durch-2-hoch-omega' => array( headline_text => 'SN.ÜV.28'),
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-mal-2-hoch-omega-element-N-infinity' => array( headline_text => 'SN.ÜV.31'),
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-2-hoch-omega+einhalb-element-N-infinity' => array( headline_text => 'SN.ÜV.32'),
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-te-Wurzel-x-ist-a-durch-b-im-Endlichen' => array( headline_text => 'SN.ÜV.46'),
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-ist-x-te-Potenz-von-m' => array( headline_text => 'SN.ÜV.49'),
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-ist-x-te-Potenz-der-Primfak-von-m' => array( headline_text => 'SN.ÜV.55'),
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-mal-b-hoch-x-gleich-a-hoch-x' => array( headline_text => 'SN.ÜV.61'),
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-teilt-a-hoch-x' => array( headline_text => 'SN.ÜV.62'),
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-Primfaktoren-k_i' => array( headline_text => 'SN.ÜV.65'),
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-g-aktual-unendlich-ganz' => array( headline_text => 'SN.ÜV.115'),
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-g-in-natuerlich-infinit' => array( headline_text => 'SN.ÜV.123'),
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-g-mal-n-hoch-eins-durch-x-in-natuerlich-infinit' => array( headline_text => 'SN.ÜV.124'),
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-g-plus-eins-durch-x-in-natuerlich-infinit' => array( headline_text => 'SN.ÜV.125'),
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-omega-in-natuerlich-infinit' => array( headline_text => 'SN.ÜV.127'),
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-omega-mal-n-hoch-eins-durch-x-in-natuerlich-infinit' => array( headline_text => 'SN.ÜV.128'),
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-eins-durch-x-gleich-n-hoch-omega-mal-n-hoch-eins-durch-x-durch-n-hoch-omega' => array( headline_text => 'SN.ÜV.130'),
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-eins-durch-x-gleich-n-hoch-omega-plus-n-hoch-eins-durch-x-durch-n-hoch-omega' => array( headline_text => 'SN.ÜV.131'),
                        
        'OM:SupNum:Ueberrationalitaetsvermutung:Diskussion-des-Beweises' => array( headline_text => 'Diskussion des Beweises'/* , headline_text_short => 'X'*/),
      ),
    ),
    'OM:SupNum:Vermutung-superiale-Koeffizienten-algebraischer-Zahlen' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/Vermutung-superiale-Koeffizienten-sind-Realanteile-algebraischer-Zahlen.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Vermutung-superiale-Koeffizienten-sind-Realanteile-algebraischer-Zahlen.php',
      titel => 'Vermutung superiale Koeffizienten sind die algebraischen Zahlen - Die Superial-Zahlen (SN) - Deutsch',
      description => '\name[undertitle]{OM:SupNum:Vermutung-superiale-Koeffizienten-algebraischer-Zahlen}. — \name[description]{OM:SupNum:Vermutung-superiale-Koeffizienten-algebraischer-Zahlen}.',
      keywords => '',
      text_titel_h1 => 'Vermutung superiale Koeffizienten sind die algebraischen Zahlen',
      text_titel_short => 'Vermutung superiale Koeffizienten sind die algebraischen Zahlen',
      text_undertitel_h2 => 'Wir vermuten, dass alle sinnvollen superialen Koeffizienten exakt den Koeffizienten aller algebraischen Zahlen entsprechen',
      text_titel_discr_h3 => 'Die Trennlinie zwischen den Koeffizienten – Realanteilen – aller algebraischen Zahlen und den transzendenten Zahlen entspricht im Grunde der Trennlinie zwischen den Fraktalebenen der Superial-Zahlen',
      jump_ary => array(
        'OM:SupNum:Vermutung-superiale-Koeffizienten-algebraischer-Zahlen:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                   
          // 'OM:SupNum:Vermutung-superiale-Koeffizienten-algebraischer-Zahlen:Vortext:X' => array( headline_text => 'SN.ÜV.7'),
      ),
    ),
  );
?>
