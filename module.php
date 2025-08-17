<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2022 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Murwell\WebtreesModules\History\myGrTimeline;

use Fisharebest\Localization\Translation;
use Fisharebest\Webtrees\I18N;
use Fisharebest\Webtrees\Module\AbstractModule;
use Fisharebest\Webtrees\Module\ModuleCustomInterface;
use Fisharebest\Webtrees\Module\ModuleCustomTrait;
use Fisharebest\Webtrees\Module\ModuleHistoricEventsTrait;
use Fisharebest\Webtrees\Module\ModuleHistoricEventsInterface;
use Illuminate\Support\Collection;

/** 
 * Historic Events: myGrTimeline
 */

return new class extends AbstractModule implements ModuleCustomInterface, ModuleHistoricEventsInterface {
    use ModuleCustomTrait;
    use ModuleHistoricEventsTrait;

    public const CUSTOM_TITLE = 'myGrTimeline';

    public const CUSTOM_AUTHOR = 'ChZarafidis';
    
    public const CUSTOM_WEBSITE = 'https://github.com/chzarafidis/myGrTimeline/';
    
    public const CUSTOM_VERSION = '1.0.0';

/**
     * Constructor.  The constructor is called on *all* modules, even ones that are disabled.
     * This is a good place to load business logic ("services").  Type-hint the parameters and
     * they will be injected automatically.
     */
    
    public function __construct()
    {
        // NOTE:  If your module is dependent on any of the business logic ("services"),
        // then you would type-hint them in the constructor and let webtrees inject them
        // for you.  However, we can't use dependency injection on anonymous classes like
        // this one. For an example of this, see the example-server-configuration module.
    }

    /**
     * Bootstrap.  This function is called on *enabled* modules.
     * It is a good place to register routes and views.
     *
     * @return void
     */
    public function boot(): void
    {
    }
   /**
     * How should this module be identified in the control panel, etc.?
     *
     * @return string
     */
    public function title(): string
    {
        return self::CUSTOM_TITLE;
    }

 
    /**
     * The person or organisation who created this module.
     *
     * @return string
     */
    public function customModuleAuthorName(): string
    {
        return self::CUSTOM_AUTHOR;
    }

    /**
     * The version of this module.
     *
     * @return string
     */
    public function customModuleVersion(): string
    {
        return self::CUSTOM_VERSION;
    }
    /**
     * Should this module be enabled when it is first installed?
     *
     * @return bool
     */
    public function isEnabledByDefault(): bool
    {
        return false;
    }

    /**
     * All events provided by this module (AI Generated).
     *
     * @return Collection<string>
     */
     
    public function historicEventsAll(): Collection
    {
    
        return new Collection([
    "1 EVEN Ίδρυση Φροντιστηρίου Τραπεζούντας\n2 TYPE Education\n2 DATE 1682\n2 NOTE Ο Σεβαστός Κυμινήτης ιδρύει το σπουδαιότερο εκπαιδευτικό ίδρυμα του Πόντου. [wikipedia gr](https://el.wikipedia.org/wiki/Φροντιστήριο_Τραπεζούντας )",
    "1 EVEN Ίδρυση Φροντιστηρίου Αργυρούπολης\n2 TYPE Education\n2 DATE 1723\n2 NOTE Ιδρύεται το δεύτερο μεγάλο εκπαιδευτικό κέντρο του Πόντου, με τεράστια συμβολή στην παιδεία της Χαλδίας. [wikipedia gr](https://el.wikipedia.org/wiki/Αργυρούπολη_Πόντου#Εκπαίδευση )",
    "1 EVEN Ορλωφικά\n2 TYPE Uprising\n2 DATE 1770\n2 NOTE Υποκινούμενη από τη Ρωσία επανάσταση στην Πελοπόννησο και την Κρήτη. [wikipedia gr](https://el.wikipedia.org/wiki/Ορλωφικά )",
    "1 EVEN Ίδρυση Σχολής Τσοτυλίου\n2 TYPE Education\n2 DATE 1771\n2 NOTE Η σχολή εξελίχθηκε σε φάρο του Ελληνισμού για τη Δυτική Μακεδονία. [wikipedia gr](https://el.wikipedia.org/wiki/Τσοτύλι_Κοζάνης#Γυμνάσιο )",
    "1 EVEN Γαλλική Επανάσταση\n2 TYPE Background\n2 DATE 1789\n2 NOTE Οι ιδέες της για ""Ελευθερία, Ισότητα, Αδελφοσύνη"" διαδίδονται στον ελληνικό χώρο. [wikipedia gr](https://el.wikipedia.org/wiki/Γαλλική_Επανάσταση )",
    "1 EVEN Μαρτύριο Ρήγα Φεραίου\n2 TYPE Execution\n2 DATE 1797\n2 NOTE Ο Ρήγας στραγγαλίζεται στο Βελιγράδι και ο ""Θούριός"" του γίνεται ο ύμνος της επερχόμενης εξέγερσης. [wikipedia gr](https://el.wikipedia.org/wiki/Ρήγας_Φεραίος )",
    "1 EVEN Ίδρυση Φιλικής Εταιρείας\n2 TYPE Background\n2 DATE 1814\n2 NOTE Στην Οδησσό, ιδρύεται η μυστική οργάνωση που προετοίμασε την Ελληνική Επανάσταση. [wikipedia gr](https://el.wikipedia.org/wiki/Φιλική_Εταιρεία )",
    "1 EVEN Ελληνική Επανάσταση\n2 TYPE War of Independence\n2 DATE FROM 1821 TO 1827\n2 NOTE Ο αγώνας των Ελλήνων για την ανεξαρτησία από την Οθωμανική Αυτοκρατορία. [wikipedia gr](https://el.wikipedia.org/wiki/Ελληνική_Επανάσταση_του_1821 )",
    "1 EVEN Ίδρυση Ελληνικού Κράτους\n2 TYPE Nation Building\n2 DATE FROM 1830 TO 1832\n2 NOTE Με τις Συνθήκες Λονδίνου & Κωνσταντινούπολης, ορίζονται τα πρώτα σύνορα. [wikipedia gr](https://el.wikipedia.org/wiki/Πρωτόκολλο_του_Λονδίνου_(1830) )",
    "1 EVEN Προσάρτηση Επτανήσων\n2 TYPE Annexation\n2 DATE 29 MARCH 1864\n2 NOTE Η Βρετανία παραχωρεί τα Ιόνια Νησιά στην Ελλάδα. [wikipedia gr](https://el.wikipedia.org/wiki/Ένωση_της_Επτανήσου_με_την_Ελλάδα )",
    "1 EVEN Μεγάλη Ανατολική Κρίση\n2 TYPE Diplomatic Crisis\n2 DATE FROM 1875 TO 1878\n2 NOTE Η κρίση οδηγεί στον Ρωσοτουρκικό πόλεμο και το Συνέδριο του Βερολίνου. [wikipedia gr](https://el.wikipedia.org/wiki/Μεγάλη_Ανατολική_Κρίση )",
    "1 EVEN Προσάρτηση Θεσσαλίας και Άρτας\n2 TYPE Annexation\n2 DATE 1881\n2 NOTE Η Οθωμανική Αυτοκρατορία παραχωρεί τις περιοχές αυτές στην Ελλάδα. [wikipedia gr](https://el.wikipedia.org/wiki/Σύμβαση_της_Κωνσταντινούπολης_(1881) )",
    "1 EVEN Διάνοιξη Διώρυγας Κορίνθου\n2 TYPE Infrastructure\n2 DATE 1893\n2 NOTE Ολοκληρώνεται το εμβληματικό έργο του Χαρίλαου Τρικούπη. [wikipedia gr](https://el.wikipedia.org/wiki/Διώρυγα_της_Κορίνθου )",
    "1 EVEN Ολυμπιακοί Αγώνες Αθήνας\n2 TYPE Cultural\n2 DATE 1896\n2 NOTE Διεξαγωγή των πρώτων σύγχρονων Ολυμπιακών Αγώνων. [wikipedia gr](https://el.wikipedia.org/wiki/Θερινοί_Ολυμπιακοί_Αγώνες_1896 )",
    "1 EVEN Ελληνοτουρκικός Πόλεμος (Ατυχής Πόλεμος)\n2 TYPE War\n2 DATE 1897\n2 NOTE Ξεσπά με αφορμή την Κρητική Επανάσταση και καταλήγει σε ήττα της Ελλάδας. [wikipedia gr](https://el.wikipedia.org/wiki/Ελληνοτουρκικός_Πόλεμος_(1897) )",
    "1 EVEN Αυτονομία Κρήτης & Διεθνής Οικονομικός Έλεγχος\n2 TYPE Political\n2 DATE 1898\n2 NOTE Η Κρήτη γίνεται αυτόνομη ηγεμονία και επιβάλλεται στην Ελλάδα Διεθνής Οικονομικός Έλεγχος. [wikipedia gr](https://el.wikipedia.org/wiki/Κρητική_Πολιτεία )",
    "1 EVEN Μακεδονικός Αγώνας\n2 TYPE Guerrilla War\n2 DATE FROM 1904 TO 1908\n2 NOTE Ένοπλα ελληνικά σώματα συγκρούονται με Βούλγαρους κομιτατζήδες στη Μακεδονία. [wikipedia gr](https://el.wikipedia.org/wiki/Μακεδονικός_Αγώνας )",
    "1 EVEN Ίδρυση Αλβανικού Κράτους\n2 TYPE Nation Building\n2 DATE 28 NOV 1912\n2 NOTE Ο Ισμαήλ Κεμάλ κηρύσσει την ανεξαρτησία της Αλβανίας στην Αυλώνα. [wikipedia gr](https://el.wikipedia.org/wiki/Διακήρυξη_της_Αλβανικής_Ανεξαρτησίας )",
    "1 EVEN Ένωση Κρήτης με την Ελλάδα\n2 TYPE Annexation\n2 DATE 01 DEC 1913\n2 NOTE Μετά τους Βαλκανικούς Πολέμους, η Κρήτη ενσωματώνεται επίσημα στο Ελληνικό Κράτος. [wikipedia gr](https://el.wikipedia.org/wiki/Κρητική_Πολιτεία#Η_Ένωση )",
    "1 EVEN Πρωτόκολλο Φλωρεντίας, Η Βόρεια Ήπειρος στην Αλβανία\n2 TYPE Treaty\n2 DATE 17 DEC 1913\n2 NOTE Οι Μεγάλες Δυνάμεις επιδικάζουν τη Βόρεια Ήπειρο στο νεοσύστατο αλβανικό κράτος. [wikipedia gr](https://el.wikipedia.org/wiki/Πρωτόκολλο_της_Φλωρεντίας_(1913) )",
    "1 EVEN Α' Παγκόσμιος Πόλεμος & Εθνικός Διχασμός\n2 TYPE War\n2 DATE FROM 1914 TO 1918\n2 NOTE Η σύγκρουση Βενιζέλου-Κωνσταντίνου για την είσοδο στον πόλεμο διχάζει τη χώρα. [wikipedia gr](https://el.wikipedia.org/wiki/Εθνικός_Διχασμός )",
    "1 EVEN Γενοκτονία Ελλήνων του Πόντου\n2 TYPE Genocide\n2 DATE FROM 1914 TO 1923\n2 NOTE Η συστηματική εξόντωση του ελληνικού πληθυσμού του Πόντου από την Οθωμανική Αυτοκρατορία. [wikipedia gr](https://el.wikipedia.org/wiki/Γενοκτονία_των_Ελλήνων_του_Πόντου )",
    "1 EVEN Οκτωβριανή Επανάσταση\n2 TYPE Revolution\n2 DATE OCT 1917\n2 NOTE Η κατάληψη της εξουσίας από τους Μπολσεβίκους στη Ρωσία αλλάζει τις παγκόσμιες ισορροπίες. [wikipedia gr](https://el.wikipedia.org/wiki/Οκτωβριανή_Επανάσταση )",
    "1 EVEN Συνθήκη του Μπρεστ-Λιτόφσκ\n2 TYPE Treaty\n2 DATE 03 MARCH 1918\n2 NOTE Η Σοβιετική Ρωσία αποχωρεί από τον Α' Π.Π., παραχωρώντας το Καρς στους Οθωμανούς. [wikipedia gr](https://el.wikipedia.org/wiki/Συνθήκη_του_Μπρεστ_-Λιτόφσκ )",
    "1 EVEN Μικρασιατική Εκστρατεία και Καταστροφή\n2 TYPE War\n2 DATE FROM 1919 TO 1922\n2 NOTE Η εκστρατεία του ελληνικού στρατού στη Μικρά Ασία και η τελική ήττα και καταστροφή. [wikipedia gr](https://el.wikipedia.org/wiki/Μικρασιατική_εκστρατεία )",
    "1 EVEN Δημιουργία της ΕΣΣΔ\n2 TYPE Nation Building\n2 DATE 30 DEC 1922\n2 NOTE Ίδρυση της Ένωσης Σοβιετικών Σοσιαλιστικών Δημοκρατιών. [wikipedia gr](https://el.wikipedia.org/wiki/Σοβιετική_Ένωση )",
    "1 EVEN Συνθήκη της Λωζάνης\n2 TYPE Treaty\n2 DATE 1923\n2 NOTE Καθορίζονται τα σύνορα Ελλάδας-Τουρκίας και συμφωνείται η ανταλλαγή πληθυσμών. [wikipedia gr](https://el.wikipedia.org/wiki/Συνθήκη_της_Λωζάνης )",
    "1 EVEN Β' Ελληνική Δημοκρατία\n2 TYPE Political\n2 DATE FROM 1924 TO 1935\n2 NOTE Η περίοδος της Αβασίλευτης Δημοκρατίας στην Ελλάδα. [wikipedia gr](https://el.wikipedia.org/wiki/Δεύτερη_Ελληνική_Δημοκρατία )",
    "1 EVEN Παγκόσμιο Οικονομικό Κραχ\n2 TYPE Economic Crisis\n2 DATE 1929\n2 NOTE Το Κραχ της Wall Street οδηγεί σε παγκόσμια ύφεση, επηρεάζοντας και την Ελλάδα. [wikipedia gr](https://el.wikipedia.org/wiki/Κραχ_του_1929 )",
    "1 EVEN Δικτατορία 4ης Αυγούστου\n2 TYPE Dictatorship\n2 DATE FROM 1936 TO 1941\n2 NOTE Το δικτατορικό καθεστώς του Ιωάννη Μεταξά. [wikipedia gr](https://el.wikipedia.org/wiki/Καθεστώς_της_4ης_Αυγούστου )",
    "1 EVEN Ρίψη ατομικών βομβών σε Χιροσίμα και Ναγκασάκι\n2 TYPE Attack\n2 DATE AUG 1945\n2 NOTE Οι ΗΠΑ χρησιμοποιούν ατομικά όπλα, επισπεύδοντας το τέλος του Β' Παγκοσμίου Πολέμου. [wikipedia gr](https://el.wikipedia.org/wiki/Ρίψη_ατομικής_βόμβας_στη_Χιροσίμα_και_το_Ναγκασάκι )",
    "1 EVEN Εμφύλιος Πόλεμος\n2 TYPE Civil War\n2 DATE FROM 1946 TO 1949\n2 NOTE Η ένοπλη σύγκρουση που σημάδεψε τη μεταπολεμική Ελλάδα. [wikipedia gr](https://el.wikipedia.org/wiki/Ελληνικός_εμφύλιος_πόλεμος_(1946-1949) )",
    "1 EVEN Προσάρτηση Δωδεκανήσων\n2 TYPE Annexation\n2 DATE 1947\n2 NOTE Με τη Συνθήκη των Παρισίων, τα Δωδεκάνησα ενσωματώνονται στην Ελλάδα. [wikipedia gr](https://el.wikipedia.org/wiki/Δωδεκάνησα#Ενσωμάτωση_στον_κορμό_του_Ελληνικού_Κράτους )",
    "1 EVEN Πόλεμος της Κορέας\n2 TYPE War\n2 DATE FROM 1950 TO 1953\n2 NOTE Η Ελλάδα συμμετέχει με εκστρατευτικό σώμα στο πλευρό των δυνάμεων του ΟΗΕ. [wikipedia gr](https://el.wikipedia.org/wiki/Πόλεμος_της_Κορέας )",
    "1 EVEN Ένταξη της Ελλάδας στο ΝΑΤΟ\n2 TYPE Alliance\n2 DATE 1952\n2 NOTE Η Ελλάδα γίνεται πλήρες μέλος της Βορειοατλαντικής Συμμαχίας. [wikipedia gr](https://el.wikipedia.org/wiki/ΝΑΤΟ )",
    "1 EVEN Πόλεμος του Βιετνάμ\n2 TYPE War\n2 DATE FROM 1955 TO 1975\n2 NOTE Ο μακροχρόνιος πόλεμος που έγινε επίκεντρο της αντιπαράθεσης του Ψυχρού Πολέμου. [wikipedia gr](https://el.wikipedia.org/wiki/Πόλεμος_του_Βιετνάμ )",
    "1 EVEN Στρατιωτική Δικτατορία\n2 TYPE Dictatorship\n2 DATE FROM 1967 TO 1974\n2 NOTE Η ""Χούντα των Συνταγματαρχών"" επιβάλλει δικτατορία για επτά χρόνια. [wikipedia gr](https://el.wikipedia.org/wiki/Χούντα_των_Συνταγματαρχών )",
    "1 EVEN Εισβολή στην Κύπρο & Μεταπολίτευση\n2 TYPE Invasion\n2 DATE 1974\n2 NOTE Η τουρκική εισβολή στην Κύπρο προκαλεί την πτώση της Χούντας και την αποκατάσταση της Δημοκρατίας. [wikipedia gr](https://el.wikipedia.org/wiki/Τουρκική_εισβολή_στην_Κύπρο )",
    "1 EVEN Ένταξη της Ελλάδας στην Ε.Ο.Κ.\n2 TYPE Political\n2 DATE 1981\n2 NOTE Η Ελλάδα γίνεται το 10ο μέλος της τότε Ευρωπαϊκής Οικονομικής Κοινότητας. [wikipedia gr](https://el.wikipedia.org/wiki/Ευρωπαϊκή_Ένωση )",
    "1 EVEN Διάλυση της ΕΣΣΔ\n2 TYPE Political\n2 DATE 26 DEC 1991\n2 NOTE Η Σοβιετική Ένωση διαλύεται επίσημα, τερματίζοντας τον Ψυχρό Πόλεμο. [wikipedia gr](https://el.wikipedia.org/wiki/Διάλυση_της_Σοβιετικής_Ένωσης )",
    "1 EVEN Ένταξη στην Ευρωζώνη\n2 TYPE Economic\n2 DATE 2001\n2 NOTE Η Ελλάδα γίνεται η 12η χώρα που υιοθετεί το ευρώ. [wikipedia gr](https://el.wikipedia.org/wiki/Ευρωζώνη )",
    "1 EVEN Ολυμπιακοί Αγώνες Αθήνα 2004\n2 TYPE Cultural\n2 DATE 2004\n2 NOTE Η Ελλάδα φιλοξενεί τους 28ους Θερινούς Ολυμπιακούς Αγώνες. [wikipedia gr](https://el.wikipedia.org/wiki/Θερινοί_Ολυμπιακοί_Αγώνες_2004 )",
    "1 EVEN Ελληνική οικονομική κρίση χρέους\n2 TYPE Economic Crisis\n2 DATE FROM 2009 TO 2018\n2 NOTE Η χώρα εισέρχεται σε μια βαθιά δεκαετή οικονομική κρίση. [wikipedia gr](https://el.wikipedia.org/wiki/Ελληνική_κρίση_χρέους )",
    "1 EVEN Πανδημία COVID-19\n2 TYPE Health Crisis\n2 DATE FROM 2020 TO 2022\n2 NOTE Η Ελλάδα, όπως και ο υπόλοιπος πλανήτης, βιώνει τα αποτελέσματα της πανδημίας. [wikipedia gr](https://el.wikipedia.org/wiki/Πανδημία_COVID-19_στην_Ελλάδα )",

            
                      
        ]);
     }
        
 };


