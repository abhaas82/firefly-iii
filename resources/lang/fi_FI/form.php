<?php

/**
 * form.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // new user:
    'bank_name'                 => 'Pankin nimi',
    'bank_balance'              => 'Saldo',
    'savings_balance'           => 'Säästötilien saldo',
    'credit_card_limit'         => 'Luottoraja',
    'automatch'                 => 'Vertaile automaattisesti',
    'skip'                      => 'Ohita',
    'enabled'                   => 'Käytössä',
    'name'                      => 'Nimi',
    'active'                    => 'Aktiivinen',
    'amount_min'                => 'Vähimmäissumma',
    'amount_max'                => 'Enimmäissumma',
    'match'                     => 'Täsmää',
    'strict'                    => 'Tarkka vertailu',
    'repeat_freq'               => 'Toistot',
    'location'                  => 'Sijainti',
    'update_channel'            => 'Päivityskanava',
    'journal_currency_id'       => 'Valuutta',
    'currency_id'               => 'Valuutta',
    'transaction_currency_id'   => 'Valuutta',
    'auto_budget_currency_id'   => 'Valuutta',
    'external_ip'               => 'Serverin ulkoinen verkko-osoite (IP)',
    'attachments'               => 'Liitteet',
    'journal_amount'            => 'Summa',
    'journal_source_name'       => 'Tuottotili (lähde)',
    'keep_bill_id'              => 'Lasku',
    'journal_source_id'         => 'Käyttötili (lähde)',
    'BIC'                       => 'BIC',
    'verify_password'           => 'Vahvista salasanan turvallisuus',
    'source_account'            => 'Lähdetili',
    'destination_account'       => 'Kohdetili',
    'journal_destination_id'    => 'Käyttötili (kohde)',
    'asset_destination_account' => 'Kohdetili',
    'include_net_worth'         => 'Sisällytä varallisuuteen',
    'asset_source_account'      => 'Lähdetili',
    'journal_description'       => 'Kuvaus',
    'note'                      => 'Muistiinpanot',
    'store_new_transaction'       => 'Tallenna uusi tapahtuma',
    'split_journal'               => 'Lisää uusi osa tähän tapahtumaan',
    'split_journal_explanation'   => 'Jaa tämä tapahtuma useampiin osiin',
    'currency'                    => 'Valuutta',
    'account_id'                  => 'Käyttötili',
    'budget_id'                   => 'Budjetti',
    'opening_balance'             => 'Alkusaldo',
    'tagMode'                     => 'Tägimoodi',
    'tag_position'                => 'Tunnisteen sijainti',
    'virtual_balance'             => 'Virtuaalinen saldo',
    'targetamount'                => 'Tavoitesumma',
    'account_role'                => 'Tilin tyyppi',
    'opening_balance_date'        => 'Alkusaldon päivämäärä',
    'cc_type'                     => 'Luottokortin maksusuunnitelma',
    'cc_monthly_payment_date'     => 'Luottokortin laskun eräpäivä',
    'piggy_bank_id'               => 'Säästöpossu',
    'returnHere'                  => 'Palaa tänne',
    'returnHereExplanation'       => 'Palaa tallennuksen jälkeen takaisin tänne luomaan uusi.',
    'returnHereUpdateExplanation' => 'Palaa takaisin tänne tallennuksen jälkeen.',
    'description'                 => 'Kuvaus',
    'expense_account'             => 'Kulutustili',
    'revenue_account'             => 'Tuottotili',
    'decimal_places'              => 'Desimaaleja',
    'exchange_rate_instruction'   => 'Ulkomaan valuutat',
    'source_amount'               => 'Summa (lähde)',
    'destination_amount'          => 'Summa (kohde)',
    'native_amount'               => 'Alkuperäinen summa',
    'new_email_address'           => 'Uusi sähköpostiosoite',
    'verification'                => 'Vahvistus',
    'api_key'                     => 'API-avain',
    'remember_me'                 => 'Muista minut',
    'liability_type_id'           => 'Vastuun tyyppi',
    'interest'                    => 'Korko',
    'interest_period'             => 'Korkojakso',

    'source_account_asset'        => 'Lähdetili (käyttötili)',
    'destination_account_expense' => 'Kohdetili (kustannustili)',
    'destination_account_asset'   => 'Kohdetili (käyttötili)',
    'source_account_revenue'      => 'Lähdetili (tuottotili)',
    'type'                        => 'Tyyppi',
    'convert_Withdrawal'          => 'Muuta nosto',
    'convert_Deposit'             => 'Muuta talletus',
    'convert_Transfer'            => 'Muuta siirto',

    'amount'                      => 'Summa',
    'foreign_amount'              => 'Ulkomaan summa',
    'existing_attachments'        => 'Nykyiset liitteet',
    'date'                        => 'Päivämäärä',
    'interest_date'               => 'Korkopäivä',
    'book_date'                   => 'Kirjauspäivä',
    'process_date'                => 'Käsittelypäivä',
    'category'                    => 'Kategoria',
    'tags'                        => 'Tägit',
    'deletePermanently'           => 'Poista pysyvästi',
    'cancel'                      => 'Peruuta',
    'targetdate'                  => 'Tavoitepäivä',
    'startdate'                   => 'Aloituspäivä',
    'tag'                         => 'Tägi',
    'under'                       => 'Alle',
    'symbol'                      => 'Symboli',
    'code'                        => 'Koodi',
    'iban'                        => 'IBAN',
    'account_number'              => 'Tilinumero',
    'creditCardNumber'            => 'Luottokortin numero',
    'has_headers'                 => 'Ylätunnisteet',
    'date_format'                 => 'Päivämäärän esitystapa',
    'specifix'                    => 'Pankki- ja tiedostokohtaiset korjaukset',
    'attachments[]'               => 'Liitteet',
    'store_new_withdrawal'        => 'Tallenna uusi nosto',
    'store_new_deposit'           => 'Tallenna uusi talletus',
    'store_new_transfer'          => 'Tallenna uusi siirto',
    'add_new_withdrawal'          => 'Lisää uusi nosto',
    'add_new_deposit'             => 'Lisää uusi talletus',
    'add_new_transfer'            => 'Lisää uusi siirto',
    'title'                       => 'Otsikko',
    'notes'                       => 'Muistiinpanot',
    'filename'                    => 'Tiedoston nimi',
    'mime'                        => 'Mime-tyyppi',
    'size'                        => 'Koko',
    'trigger'                     => 'Ehto',
    'stop_processing'             => 'Lopeta käsittely',
    'start_date'                  => 'Valikoiman alku',
    'end_date'                    => 'Valikoiman loppu',
    'include_attachments'         => 'Sisällytä ladatut liitteet',
    'include_old_uploads'         => 'Sisällytä tuodut tiedot',
    'delete_account'              => 'Poista tili ":name"',
    'delete_bill'                 => 'Poista lasku ":name"',
    'delete_budget'               => 'Poista budjetti ":name"',
    'delete_category'             => 'Poista kategoria ":name"',
    'delete_currency'             => 'Poista valuutta ":name"',
    'delete_journal'              => 'Poista tapahtuma kuvauksella ":description"',
    'delete_attachment'           => 'Poista liite ":name"',
    'delete_rule'                 => 'Poista sääntö ":title"',
    'delete_rule_group'           => 'Poista sääntöryhmä ":title"',
    'delete_link_type'            => 'Poista linkkityyppi ":name"',
    'delete_user'                 => 'Poista käyttäjätili ":email"',
    'delete_recurring'            => 'Poista toistuva tapahtuma ":title"',
    'user_areYouSure'             => 'Jos poistat käyttäjätilin ":email", kaikki tiedot menetetään. Tätä ei voi peruuttaa, korjata tai mitään. Jos poistat itsesi, et pääse edes kirjautumaan tähän Firefly III instanssiin.',
    'attachment_areYouSure'       => 'Haluatko varmasti poistaa liitteen ":name"?',
    'account_areYouSure'          => 'Haluatko varmasti poistaa tilin ":name"?',
    'bill_areYouSure'             => 'Haluatko varmasti poistaa laskun ":name"?',
    'rule_areYouSure'             => 'Haluatko varmasti poistaa säännön ":title"?',
    'ruleGroup_areYouSure'        => 'Haluatko varmasti poistaa sääntöryhmän ":title"?',
    'budget_areYouSure'           => 'Haluatko varmasti poistaa budjetin ":name"?',
    'category_areYouSure'         => 'Haluatko varmasti poistaa kategorian ":name"?',
    'recurring_areYouSure'        => 'Haluatko varmasti poistaa toistuvan tapahtuman ":title"?',
    'currency_areYouSure'         => 'Haluatko varmasti poistaa valuutan ":name"?',
    'piggyBank_areYouSure'        => 'Haluatko varmasti poistaa säästöpossun ":name"?',
    'journal_areYouSure'          => 'Haluatko varmasti poistaa tapahtuman kuvauksella ":description"?',
    'mass_journal_are_you_sure'   => 'Haluatko varmasti poistaa nämä tapahtumat?',
    'tag_areYouSure'              => 'Haluatko varmasti poistaa tägin ":tag"?',
    'journal_link_areYouSure'     => 'Haluatko varmasti poistaa linkin välillä <a href=":source_link">:source</a> ja <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'         => 'Haluatko varmasti poistaa linkkityypin ":name" (":inward" / ":outward")?',
    'permDeleteWarning'           => 'Asioiden poistaminen Firefly III:sta on lopullista eikä poistoa pysty perumaan.',
    'mass_make_selection'         => 'Voit yhä estää tietojen poiston poistamalla valinnan valintaruudusta.',
    'delete_all_permanently'      => 'Poista valitut lopullisesti',
    'update_all_journals'         => 'Päivitä nämä tapahtumat',
    'also_delete_transactions'    => 'Ainoa tähän tiliin yhdistetty tapahtuma poistetaan samalla.|Kaikki tähän tiliin yhdistetyt :count tapahtumaa poistetaan samalla.',
    'also_delete_connections'     => 'Ainoa tähän linkkityyppiin liitetty tapahtuma menettää tämän yhteyden.|Kaikki :count tähän linkkityyppiin yhdistettyä tapahtumaa menettävät yhteytensä.',
    'also_delete_rules'           => 'Ainoa tähän sääntöryhmään yhdistetty sääntö poistetaan samalla.|Kaikki :count tähän sääntöryhmään linkitettyä sääntöä poistetaan samalla.',
    'also_delete_piggyBanks'      => 'Ainoa tähän tähän tiliin linkitetty säästöporsas poistetaan samalla.|Kaikki :count tähän tiliin yhdistettyä säästöpossua poistetaan samalla.',
    'bill_keep_transactions'      => 'Ainoaa tähän laskuun linkitettyä tapahtumaa ei poisteta.|Kaikki :count tähän laskuun yhdistetyt tapahtumat säästetään.',
    'budget_keep_transactions'    => 'Ainoaa tähän budjettiin linkitettyä tapahtumaa ei poisteta.|Kaikki :count tähän budjettiin yhdistetyt tapahtumat säästetään.',
    'category_keep_transactions'  => 'Ainoaa tähän kategoriaan linkitettyä tapahtumaa ei poisteta.|Kaikki :count tähän kategoriaan yhdistetyt tapahtumat säästetään.',
    'recurring_keep_transactions' => 'Ainoa tämän toistuvan tapahtuman luoma tapahtuma säästetään.|Kaikki :count tämän toistuvan tapahtuman luomaa tapahtumaa säästetään.',
    'tag_keep_transactions'       => 'Ainoa tähän tägiin linkitetty tapahtuma säästetään.|Kaikki :count tähän tägiin yhdistetyt tapahtumat säästetään.',
    'check_for_updates'           => 'Tarkista päivitykset',

    'email'                 => 'Sähköpostiosoite',
    'password'              => 'Salasana',
    'password_confirmation' => 'Salasana (uudestaan)',
    'blocked'               => 'On estetty?',
    'blocked_code'          => 'Eston syy',
    'login_name'            => 'Käyttäjätunnus',
    'is_owner'              => 'Is admin?',

    // import
    'apply_rules'           => 'Aja säännöt',
    'artist'                => 'Esittäjä',
    'album'                 => 'Albumi',
    'song'                  => 'Kappale',


    // admin
    'domain'                => 'Verkkotunnus',
    'single_user_mode'      => 'Estä lisäkäyttäjien rekisteröityminen',
    'is_demo_site'          => 'Esittelytila käytössä',

    // import
    'import_file'           => 'Tuo tiedosto',
    'configuration_file'    => 'Asetustiedosto',
    'import_file_type'      => 'Tuonnin tiedostotyyppi',
    'csv_comma'             => 'Pilkku (,)',
    'csv_semicolon'         => 'Puolipiste (;)',
    'csv_tab'               => 'Sarkain (näkymätön)',
    'csv_delimiter'         => 'CSV kentän erotin',
    'csv_import_account'    => 'Oletus tuontitili',
    'csv_config'            => 'CSV tuonnin määrittely',
    'client_id'             => 'Asiakastunnus',
    'service_secret'        => 'Service secret',
    'app_secret'            => 'App secret',
    'app_id'                => 'Sovelluksen ID (App ID)',
    'secret'                => 'Salaisuus',
    'public_key'            => 'Julkinen avain',
    'country_code'          => 'Maakoodi',
    'provider_code'         => 'Pankki tai tiedon tuottaja',
    'fints_url'             => 'FinTS API URL',
    'fints_port'            => 'Portti',
    'fints_bank_code'       => 'Pankin tunnus',
    'fints_username'        => 'Käyttäjätunnus',
    'fints_password'        => 'PIN / Salasana',
    'fints_account'         => 'FinTS käyttäjätili',
    'local_account'         => 'Firefly III käyttäjätili',
    'from_date'             => 'Aloituspäivämäärä',
    'to_date'               => 'Päättymispäivämäärä',


    'due_date'                => 'Eräpäivä',
    'payment_date'            => 'Maksupäivä',
    'invoice_date'            => 'Laskun päivämäärä',
    'internal_reference'      => 'Sisäinen viite',
    'inward'                  => 'Sisäinen kuvaus',
    'outward'                 => 'Ulkoinen kuvaus',
    'rule_group_id'           => 'Sääntöryhmä',
    'transaction_description' => 'Tapahtuman kuvaus',
    'first_date'              => 'Aloituspäivä',
    'transaction_type'        => 'Tapahtuman tyyppi',
    'repeat_until'            => 'Toista kunnes',
    'recurring_description'   => 'Toistuvan tapahtuman kuvaus',
    'repetition_type'         => 'Toiston tyyppi',
    'foreign_currency_id'     => 'Ulkomaan valuutta',
    'repetition_end'          => 'Toisto päättyy',
    'repetitions'             => 'Toistot',
    'calendar'                => 'Kalenteri',
    'weekend'                 => 'Viikonloppu',
    'client_secret'           => 'Asiakkaan salausavain (Client secret)',

    'withdrawal_destination_id' => 'Kohdetili',
    'deposit_source_id'         => 'Lähdetili',
    'expected_on'               => 'Odotettavissa',
    'paid'                      => 'Maksettu',

    'auto_budget_type'            => 'Auto-budget',
    'auto_budget_amount'            => 'Auto-budget amount',
    'auto_budget_period'            => 'Auto-budget period',

    'collected' => 'Collected',
    'submitted' => 'Submitted',
    'key' => 'Key',
    'value' => 'Content of record'


];
