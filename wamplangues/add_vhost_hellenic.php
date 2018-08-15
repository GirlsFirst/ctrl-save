﻿<?php
$langues = array(
	'langue' => 'Ελληνικά',
	'locale' => 'hellenic',
	'addVirtual' => 'Προσθήκη ενός VirtualHost',
	'backHome' => 'Επιστροφή στην Αρχική σελίδα',
	'VirtualSubMenuOn' => 'Το αντικείμενο <code>υπομενού VirtualHost</code> πρέπει να τεθεί σε (Ανοιχτό) στις <code>Ρυθμίσεις Wamp</code> Μενού Δεξιού Κλικ. Μετά επαναφορτώστε αυτή τη σελίδα',
	'UncommentInclude' => 'Αποσχολιάστε <small>(Σβήστε τη δίεση #)</small> τη γραμμή <code>#Include conf/extra/httpd-vhosts.conf</code><br>στο αρχείο %s',
	'FileNotExists' => 'Το αρχείο <code>%s</code> δεν υπάρχει',
	'FileNotWritable' => 'Το αρχείο <code>%s</code> δεν είναι εγγράψιμο',
	'DirNotExists' => 'Το <code>%s</code> δεν υπάρχει ή δεν είναι φάκελος',
	'NotCleaned' => 'Το αρχείο <code>%s</code> δεν εκκαθαρίστηκε.<br>Εκεί παραμένουν παραδείγματα VirtualHost όπως: dummy-host.example.com',
	'NoVirtualHost' => 'Δεν έχει οριστεί VirtualHost στο <code>%s</code><br>Πρέπει να υπάρχει τουλάχιστον το VirtualHost για το localhost.',
	'NoFirst' => 'Το πρώτο VirtualHost πρέπει να είναι το <code>localhost</code> στο αρχείο <code>%s</code>',
	'ServerNameInvalid' => 'Το όνομα διακομιστή ServerName <code>%s</code> δεν είναι έγκυρο.',
	'VirtualHostName' => 'Το όνομα του <code>Virtual Host</code> Όχι διακριτικοί χαρακτήρες (ecen) - Όχι κενό - Όχι κάτω παύλα (_)',
	'VirtualHostFolder' => 'Πλήρης απόλυτη <code>διαδρομή</code> του <code>φακέλου</code> του VirtualHost <i>Παραδείγματα: C:/wamp/www/projet/ ή E:/www/site1/</i>',
	'VirtualAlreadyExist' => 'Το όνομα διακοιστή ServerName <code>%s</code> υπάρχει ήδη',
	'VirtualHostExists' => 'Το VirtualHost έχει ήδη οριστεί:',
	'Start' => 'Έναρξη της δημιουργίας του VirtualHost (Ίσως διαρκέσει λίγο...)',
	'GreenErrors' => 'Τα σφάλματα σε πράσινο πλαίσιο μπορούν να διορθωθούν αυτόματα.',
	'Correct' => 'Έναρξη της αυτόματης διόρθωσης των σφαλμάτων εντός των πράσινων πλαισίων',
	'NoModify' => 'Αδύνατη η αλλαγή των αρχείων <code>httpd-vhosts.conf</code> ή <code>hosts</code>',
	'VirtualCreated' => 'Τα αρχεία έχουν αλλάξει. Το Virtual host <code>%s</code> δημιουργήθηκε',
	'CommandMessage' => 'Μηνύματα από τη γραμμή εντολών για ενημέρωση του DNS:',
	'However' => 'Μπορείτε να προσθέσετε ένα άλλο VirtualHost επικυρώνοντας το «Προσθήκη ενός VirtualHost».<br>Ωστόσο, για αυτά τα νέα VirtualHost που λαμβάνονται υπόψη από τον Apache, πρέπει να εκτελέσετε το αντικείμενο <br><code>Επανεκκίνηση DNS</code><br>από το μενού Εργαλείων Δεξιού Κλικ του εικονιδίου Wampmanager. <i>(Αυτό δυστυχώς δεν μπορεί να γίνει αυτόματα)</i>',
	);
?>