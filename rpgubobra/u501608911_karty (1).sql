
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 11 Maj 2018, 10:26
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `u501608911_karty`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gkarta`
--

CREATE TABLE IF NOT EXISTS `gkarta` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `wiek` int(11) NOT NULL,
  `plec` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `rod` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `kondycja` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `leczenie` int(11) NOT NULL,
  `strzelectwo` int(11) NOT NULL,
  `opieka_nad_zwierzetami` int(11) NOT NULL,
  `ukrycie` int(11) NOT NULL,
  `perswazja` int(11) NOT NULL,
  `walka` int(11) NOT NULL,
  `prowadzenie_wojny` int(11) NOT NULL,
  `wiedza` int(11) NOT NULL,
  `przebieglosc` int(11) NOT NULL,
  `wola` int(11) NOT NULL,
  `przetrwanie` int(11) NOT NULL,
  `zrecznosc` int(11) NOT NULL,
  `spostrzegawczosc` int(11) NOT NULL,
  `zlodziejstwo` int(11) NOT NULL,
  `spryt` int(11) NOT NULL,
  `zywotnosc` int(11) NOT NULL,
  `jezyk_nazwa` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `jezyk_wartosc` varchar(255) DEFAULT NULL,
  `specjalizacja` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `wartosc` varchar(255) DEFAULT NULL,
  `cecha` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `specjalizacja_a` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `wartosc_a` varchar(255) DEFAULT NULL,
  `cecha_a` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `specjalizacja_b` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `wartosc_b` varchar(255) DEFAULT NULL,
  `cecha_b` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `specjalizacja_c` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `wartosc_c` varchar(255) DEFAULT NULL,
  `cecha_c` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `specjalizacja_d` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `wartosc_d` varchar(255) DEFAULT NULL,
  `cecha_d` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `specjalizacja_e` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `wartosc_e` varchar(255) DEFAULT NULL,
  `cecha_e` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `specjalizacja_f` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `wartosc_f` varchar(255) DEFAULT NULL,
  `cecha_f` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `imie` (`imie`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Zrzut danych tabeli `gkarta`
--

INSERT INTO `gkarta` (`ID`, `imie`, `wiek`, `plec`, `rod`, `kondycja`, `status`, `leczenie`, `strzelectwo`, `opieka_nad_zwierzetami`, `ukrycie`, `perswazja`, `walka`, `prowadzenie_wojny`, `wiedza`, `przebieglosc`, `wola`, `przetrwanie`, `zrecznosc`, `spostrzegawczosc`, `zlodziejstwo`, `spryt`, `zywotnosc`, `jezyk_nazwa`, `jezyk_wartosc`, `specjalizacja`, `wartosc`, `cecha`, `specjalizacja_a`, `wartosc_a`, `cecha_a`, `specjalizacja_b`, `wartosc_b`, `cecha_b`, `specjalizacja_c`, `wartosc_c`, `cecha_c`, `specjalizacja_d`, `wartosc_d`, `cecha_d`, `specjalizacja_e`, `wartosc_e`, `cecha_e`, `specjalizacja_f`, `wartosc_f`, `cecha_f`) VALUES
(27, 'Frednar', 20, 'm', 'Stefanson', 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9, 10, 10, 'wspolny,ogolny', '2,3', 'Dyplomacja', '3', 'perswazja', 'handel', '3', 'spryt', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gracze`
--

CREATE TABLE IF NOT EXISTS `gracze` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Zrzut danych tabeli `gracze`
--

INSERT INTO `gracze` (`ID`, `login`, `password`) VALUES
(14, 'Ninu', '*2C96C68C00A212662E5E795A51E3E30FDE8A242B'),
(1, 'Daszek', '*C1331A936205445D22623B4FC85774588D77B2C8'),
(2, 'Drakonidas', '*816C5BAE9E32638FFED5A8FB082CEE0D05372F61'),
(15, 'Jacus', '*BC9905F5BE47FB72EF08CC360C4245182F31A8B1'),
(16, 'filosfaos', '*65E930DC05977899EEB8D73D27C65B17C8CF3086'),
(17, 'Maniu', '*52210AC5B39F6A7F4F93157D3DADE22AC98DA5E0'),
(18, 'Warhir', '*2C96C68C00A212662E5E795A51E3E30FDE8A242B');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `skarta`
--

CREATE TABLE IF NOT EXISTS `skarta` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `koncepcja` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `wyglad` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `duch` int(11) NOT NULL,
  `odwaga` int(11) NOT NULL,
  `przekonywanie` int(11) NOT NULL,
  `zastraszanie` int(11) NOT NULL,
  `sila` int(11) NOT NULL,
  `wspinaczka` int(11) NOT NULL,
  `spryt` int(11) NOT NULL,
  `hazard` int(11) NOT NULL,
  `leczenie` int(11) NOT NULL,
  `przetrwanie` int(11) NOT NULL,
  `reperowanie` int(11) NOT NULL,
  `spostrzegawczosc` int(11) NOT NULL,
  `tropienie` int(11) NOT NULL,
  `wyszukiwanie` int(11) NOT NULL,
  `wypytywanie` int(11) NOT NULL,
  `wysmiewanie` int(11) NOT NULL,
  `wiedza` int(11) NOT NULL,
  `wiedzaz` int(11) NOT NULL,
  `wiedzao` int(11) NOT NULL,
  `wigor` int(11) NOT NULL,
  `zrecznosc` int(11) NOT NULL,
  `jezdziectwo` int(11) NOT NULL,
  `plywanie` int(11) NOT NULL,
  `rzucanie` int(11) NOT NULL,
  `skradanie` int(11) NOT NULL,
  `strzelanie` int(11) NOT NULL,
  `walka` int(11) NOT NULL,
  `wlamywanie` int(11) NOT NULL,
  `zeglowanie` int(11) NOT NULL,
  `tempo` int(11) NOT NULL,
  `obrona` int(11) NOT NULL,
  `wytrzymalosc` int(11) NOT NULL,
  `charyzma` int(11) NOT NULL,
  `przewagi` text NOT NULL,
  `zawady` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `skarta`
--

INSERT INTO `skarta` (`ID`, `imie`, `koncepcja`, `wyglad`, `duch`, `odwaga`, `przekonywanie`, `zastraszanie`, `sila`, `wspinaczka`, `spryt`, `hazard`, `leczenie`, `przetrwanie`, `reperowanie`, `spostrzegawczosc`, `tropienie`, `wyszukiwanie`, `wypytywanie`, `wysmiewanie`, `wiedza`, `wiedzaz`, `wiedzao`, `wigor`, `zrecznosc`, `jezdziectwo`, `plywanie`, `rzucanie`, `skradanie`, `strzelanie`, `walka`, `wlamywanie`, `zeglowanie`, `tempo`, `obrona`, `wytrzymalosc`, `charyzma`, `przewagi`, `zawady`) VALUES
(1, 'Frednar', 'krasnolud pijak', 'brazowa broda,wiecznie pijany', 4, 4, 4, 4, 4, 4, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 8, 10, 10, 10, 10, 10, 10, 10, 10, 10, 2, 2, 2, 0, 'odporność na alkochol	\r\n			', 'alkocholizm			');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wkarta`
--

CREATE TABLE IF NOT EXISTS `wkarta` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `wiek` int(11) NOT NULL,
  `plec` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `wzrost` int(11) NOT NULL,
  `oczy` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `waga` int(11) NOT NULL,
  `wlosy` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `gracz` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `imie` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `rasa` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `kondycja` int(11) NOT NULL,
  `empatia` int(11) NOT NULL,
  `zrecznosc` int(11) NOT NULL,
  `zwinnosc` int(11) NOT NULL,
  `plywanie` int(11) NOT NULL,
  `nasluchiwanie` int(11) NOT NULL,
  `charakteryzacja` int(11) NOT NULL,
  `akrobatyka` int(11) NOT NULL,
  `wigor` int(11) NOT NULL,
  `polowanie` int(11) NOT NULL,
  `falszowanie` int(11) NOT NULL,
  `gibkosc` int(11) NOT NULL,
  `poruszanie` int(11) NOT NULL,
  `przeszukiwanie` int(11) NOT NULL,
  `rzezanie` int(11) NOT NULL,
  `jezdziectwo` int(11) NOT NULL,
  `sila` int(11) NOT NULL,
  `rzucanie` int(11) NOT NULL,
  `unieszkodliwianie` int(11) NOT NULL,
  `powozenie` int(11) NOT NULL,
  `gornictwo` int(11) NOT NULL,
  `spostrzegawczosc` int(11) NOT NULL,
  `walkab` int(11) NOT NULL,
  `rybolostwo` int(11) NOT NULL,
  `zmysly` int(11) NOT NULL,
  `strzelanie` int(11) NOT NULL,
  `walkaw` int(11) NOT NULL,
  `skradanie` int(11) NOT NULL,
  `czytanie` int(11) NOT NULL,
  `tortury` int(11) NOT NULL,
  `wlamywanie` int(11) NOT NULL,
  `wspinaczka` int(11) NOT NULL,
  `tropienie` int(11) NOT NULL,
  `unik` int(11) NOT NULL,
  `widzenie` int(11) NOT NULL,
  `Intelekt` int(11) NOT NULL,
  `modlitwy` int(11) NOT NULL,
  `zbieranie_informacji` int(11) NOT NULL,
  `rozmawianie` int(11) NOT NULL,
  `alchemia` int(11) NOT NULL,
  `magia` int(11) NOT NULL,
  `zeglarstwo` int(11) NOT NULL,
  `zastraszanie` int(11) NOT NULL,
  `astrologia` int(11) NOT NULL,
  `przetrwanie` int(11) NOT NULL,
  `znaki_wiedzminskie` int(11) NOT NULL,
  `Wola` int(11) NOT NULL,
  `cwaniactwo` int(11) NOT NULL,
  `szacowanie` int(11) NOT NULL,
  `Oglada` int(11) NOT NULL,
  `dociekliwosc` int(11) NOT NULL,
  `pisanie` int(11) NOT NULL,
  `taktyka` int(11) NOT NULL,
  `dowodzenie` int(11) NOT NULL,
  `koncentracja` int(11) NOT NULL,
  `ekonomia` int(11) NOT NULL,
  `uzdrawianie` int(11) NOT NULL,
  `dyplomacja` int(11) NOT NULL,
  `kupiectwo` int(11) NOT NULL,
  `geografia` int(11) NOT NULL,
  `wiedza` int(11) NOT NULL,
  `etykieta` int(11) NOT NULL,
  `przekupstwo` int(11) NOT NULL,
  `starsza` int(11) NOT NULL,
  `wiedza_o` int(11) NOT NULL,
  `przemawianie` int(11) NOT NULL,
  `przenikliwosc` int(11) NOT NULL,
  `wspolny` int(11) NOT NULL,
  `wiedza_z` int(11) NOT NULL,
  `szelmowstwo` int(11) NOT NULL,
  `ojczysty` int(11) NOT NULL,
  `zimna` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `wkarta`
--

INSERT INTO `wkarta` (`ID`, `wiek`, `plec`, `wzrost`, `oczy`, `waga`, `wlosy`, `gracz`, `imie`, `rasa`, `kondycja`, `empatia`, `zrecznosc`, `zwinnosc`, `plywanie`, `nasluchiwanie`, `charakteryzacja`, `akrobatyka`, `wigor`, `polowanie`, `falszowanie`, `gibkosc`, `poruszanie`, `przeszukiwanie`, `rzezanie`, `jezdziectwo`, `sila`, `rzucanie`, `unieszkodliwianie`, `powozenie`, `gornictwo`, `spostrzegawczosc`, `walkab`, `rybolostwo`, `zmysly`, `strzelanie`, `walkaw`, `skradanie`, `czytanie`, `tortury`, `wlamywanie`, `wspinaczka`, `tropienie`, `unik`, `widzenie`, `Intelekt`, `modlitwy`, `zbieranie_informacji`, `rozmawianie`, `alchemia`, `magia`, `zeglarstwo`, `zastraszanie`, `astrologia`, `przetrwanie`, `znaki_wiedzminskie`, `Wola`, `cwaniactwo`, `szacowanie`, `Oglada`, `dociekliwosc`, `pisanie`, `taktyka`, `dowodzenie`, `koncentracja`, `ekonomia`, `uzdrawianie`, `dyplomacja`, `kupiectwo`, `geografia`, `wiedza`, `etykieta`, `przekupstwo`, `starsza`, `wiedza_o`, `przemawianie`, `przenikliwosc`, `wspolny`, `wiedza_z`, `szelmowstwo`, `ojczysty`, `zimna`) VALUES
(1, 21, 'aeefwq', 2, 'dasfq', 23, 'd', 'awdfq', 'sefe', 'fswef', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
(2, 57, 'Wiedźmin', 190, 'Psie', 95, 'Czarne', 'Bursa', 'Gopnik', 'Wiedźmin', 3, 0, 4, 2, 1, 1, 0, 1, 2, 1, 0, 1, 2, 0, 0, 1, 2, 1, 1, 0, 0, 1, 4, 0, 3, 0, 1, 1, 0, 1, 0, 1, 1, 1, 1, 3, 0, 0, 0, 2, 0, 0, 1, 0, 1, 3, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 2, 0, 1, 0, 2, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 1),
(3, 35, 'M', 140, 'Czarne', 120, 'Czarne', 'Darek', 'Drakonid', 'Krasnolud', 4, 0, 4, 2, 0, 1, 0, 0, 4, 0, 0, 0, 2, 0, 0, 0, 4, 0, 2, 0, 2, 0, 4, 0, 1, 0, 2, 0, 0, 0, 0, 0, 0, 2, 3, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 2, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
