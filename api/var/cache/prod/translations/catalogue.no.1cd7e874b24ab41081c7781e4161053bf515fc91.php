<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('no', array (
  'validators' => 
  array (
    'This value should be false.' => 'Verdien må være usann.',
    'This value should be true.' => 'Verdien må være sann.',
    'This value should be of type {{ type }}.' => 'Verdien skal ha typen {{ type }}.',
    'This value should be blank.' => 'Verdien skal være blank.',
    'The value you selected is not a valid choice.' => 'Den valgte verdien er ikke gyldig.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du må velge minst {{ limit }} valg.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan maks velge {{ limit }} valg.',
    'One or more of the given values is invalid.' => 'En eller flere av de oppgitte verdiene er ugyldige.',
    'This field was not expected.' => 'Dette feltet var ikke forventet.',
    'This field is missing.' => 'Dette feltet mangler.',
    'This value is not a valid date.' => 'Verdien er ikke en gyldig dato.',
    'This value is not a valid datetime.' => 'Verdien er ikke en gyldig dato/tid.',
    'This value is not a valid email address.' => 'Verdien er ikke en gyldig e-postadresse.',
    'The file could not be found.' => 'Filen kunne ikke finnes.',
    'The file is not readable.' => 'Filen er ikke lesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor ({{ size }} {{ suffix }}). Tilatte maksimale størrelse {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mimetypen av filen er ugyldig ({{ type }}). Tilatte mimetyper er {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Verdien må være {{ limit }} tegn lang eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Verdien er for lang. Den må ha {{ limit }} tegn eller mindre.',
    'This value should be {{ limit }} or more.' => 'Verdien må være {{ limit }} eller mer.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Verdien er for kort. Den må ha {{ limit }} tegn eller flere.',
    'This value should not be blank.' => 'Verdien kan ikke være blank.',
    'This value should not be null.' => 'Verdien kan ikke være tom (null).',
    'This value should be null.' => 'Verdien skal være tom (null).',
    'This value is not valid.' => 'Verdien er ugyldig.',
    'This value is not a valid time.' => 'Verdien er ikke en gyldig tid.',
    'This value is not a valid URL.' => 'Verdien er ikke en gyldig URL.',
    'The two values should be equal.' => 'Verdiene skal være identiske.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor. Den maksimale størrelsen er {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Filen er for stor.',
    'The file could not be uploaded.' => 'Filen kunne ikke lastes opp.',
    'This value should be a valid number.' => 'Verdien skal være et gyldig tall.',
    'This file is not a valid image.' => 'Denne filen er ikke et gyldig bilde.',
    'This is not a valid IP address.' => 'Dette er ikke en gyldig IP adresse.',
    'This value is not a valid language.' => 'Verdien er ikke et gyldig språk.',
    'This value is not a valid locale.' => 'Verdien er ikke en gyldig lokalitet.',
    'This value is not a valid country.' => 'Verdien er ikke et gyldig navn på land.',
    'This value is already used.' => 'Verdien er allerede brukt.',
    'The size of the image could not be detected.' => 'Bildestørrelsen kunne ikke oppdages.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Bildebredden er for stor ({{ width }} piksler). Tillatt maksimumsbredde er {{ max_width }} piksler.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Bildebredden er for liten ({{ width }} piksler). Forventet minimumsbredde er {{ min_width }} piksler.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Bildehøyden er for stor ({{ height }} piksler). Tillatt maksimumshøyde er {{ max_height }} piksler.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Bildehøyden er for liten ({{ height }} piksler). Forventet minimumshøyde er {{ min_height }} piksler.',
    'This value should be the user\'s current password.' => 'Verdien skal være brukerens sitt nåværende passord.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Verdien skal være nøyaktig {{ limit }} tegn.',
    'The file was only partially uploaded.' => 'Filen var kun delvis opplastet.',
    'No file was uploaded.' => 'Ingen fil var lastet opp.',
    'No temporary folder was configured in php.ini.' => 'Den midlertidige mappen (tmp) er ikke konfigurert i php.ini.',
    'Cannot write temporary file to disk.' => 'Kan ikke skrive midlertidig fil til disk.',
    'A PHP extension caused the upload to fail.' => 'En PHP-utvidelse forårsaket en feil under opplasting.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Denne samlingen må inneholde {{ limit }} element eller flere.|Denne samlingen må inneholde {{ limit }} elementer eller flere.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Denne samlingen må inneholde {{ limit }} element eller færre.|Denne samlingen må inneholde {{ limit }} elementer eller færre.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Denne samlingen må inneholde nøyaktig {{ limit }} element.|Denne samlingen må inneholde nøyaktig {{ limit }} elementer.',
    'Invalid card number.' => 'Ugyldig kortnummer.',
    'Unsupported card type or invalid card number.' => 'Korttypen er ikke støttet eller kortnummeret er ugyldig.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dette er ikke et gyldig IBAN-nummer.',
    'This value is not a valid ISBN-10.' => 'Verdien er ikke en gyldig ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Verdien er ikke en gyldig ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Verdien er hverken en gyldig ISBN-10 eller ISBN-13.',
    'This value is not a valid ISSN.' => 'Verdien er ikke en gyldig ISSN.',
    'This value is not a valid currency.' => 'Verdien er ikke gyldig valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Verdien skal være lik {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Verdien skal være større enn {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Verdien skal være større enn eller lik {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Verdien skal være identisk med {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Verdien skal være mindre enn {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Verdien skal være mindre enn eller lik {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Verdien skal ikke være lik {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Verdien skal ikke være identisk med {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Bildeforholdet er for stort ({{ ratio }}). Tillatt bildeforhold er maks {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Bildeforholdet er for lite ({{ ratio }}). Forventet bildeforhold er minst {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Bildet er en kvadrat ({{ width }}x{{ height }}px). Kvadratiske bilder er ikke tillatt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Bildet er i liggende retning ({{ width }}x{{ height }}px). Bilder i liggende retning er ikke tillatt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Bildet er i stående retning ({{ width }}x{{ height }}px). Bilder i stående retning er ikke tillatt.',
    'An empty file is not allowed.' => 'Tomme filer er ikke tilatt.',
    'The host could not be resolved.' => 'Vertsnavn kunne ikke løses.',
    'This value does not match the expected {{ charset }} charset.' => 'Verdien samsvarer ikke med forventet tegnsett {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dette er ikke en gyldig BIC.',
    'This form should not contain extra fields.' => 'Feltgruppen må ikke inneholde ekstra felter.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den opplastede filen var for stor. Vennligst last opp en mindre fil.',
    'The CSRF token is invalid.' => 'CSRF nøkkelen er ugyldig.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'En autentiseringsfeil har skjedd.',
    'Authentication credentials could not be found.' => 'Påloggingsinformasjonen kunne ikke bli funnet.',
    'Authentication request could not be processed due to a system problem.' => 'Autentiserings forespørselen kunne ikke bli prosessert grunnet en system feil.',
    'Invalid credentials.' => 'Ugyldig påloggingsinformasjonen.',
    'Cookie has already been used by someone else.' => 'Cookie har allerede blitt brukt av noen andre.',
    'Not privileged to request the resource.' => 'Ingen tilgang til å be om gitt ressurs.',
    'Invalid CSRF token.' => 'Ugyldig CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce er utløpt.',
    'No authentication provider found to support the authentication token.' => 'Ingen autentiserings tilbyder funnet som støtter gitt autentiserings token.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen sesjon tilgjengelig, sesjonen er enten utløpt eller cookies ikke skrudd på.',
    'No token could be found.' => 'Ingen token kunne bli funnet.',
    'Username could not be found.' => 'Brukernavn kunne ikke bli funnet.',
    'Account has expired.' => 'Brukerkonto har utgått.',
    'Credentials have expired.' => 'Påloggingsinformasjon har utløpt.',
    'Account is disabled.' => 'Brukerkonto er deaktivert.',
    'Account is locked.' => 'Brukerkonto er sperret.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This subject is already added' => 'This subject is already added',
    'fos_user.email.already_used' => 'The email is already used.',
    'fos_user.email.blank' => 'Please enter an email.',
    'fos_user.email.invalid' => 'The email is not valid.',
    'fos_user.email.long' => 'The email is too long.',
    'fos_user.email.short' => 'The email is too short.',
    'fos_user.password.blank' => 'Please enter a password.',
    'fos_user.password.short' => 'The password is too short.',
    'fos_user.username.already_used' => 'The username is already used.',
    'fos_user.username.blank' => 'Please enter a username.',
    'fos_user.username.long' => 'The username is too long.',
    'fos_user.username.short' => 'The username is too short.',
    'fos_user.password.mismatch' => 'The entered passwords don\'t match.',
    'fos_user.new_password.blank' => 'Please enter a new password.',
    'fos_user.new_password.short' => 'The new password is too short.',
    'fos_user.current_password.invalid' => 'The entered password is invalid.',
    'fos_user.group.blank' => 'Please enter a name.',
    'fos_user.group.short' => 'The name is too short.',
    'fos_user.group.long' => 'The name is too long.',
    'fos_group.name.already_used' => 'The name is already used.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'messages' => 
  array (
    '%ADD_SUBS%' => '%ADD_SUBS%',
    '%AD_NW_SR%' => 'Add New User',
    '%Add ClassClassAddForm%' => 'Add New Class',
    '%AddNewSubject%' => 'Add New Subject',
    '%ClassDeleted%' => 'Class Deleted',
    '%ClassUpdated%' => 'Class Updated',
    '%Classes%' => 'Classes',
    '%Classesadded%' => 'Class Added',
    '%ClsSubMsg%' => '%ClsSubMsg%',
    '%DeleteClass%' => 'Delete Class',
    '%DeleteSubject%' => 'Delete Subject',
    '%EDIT_MSG%' => '%EDIT_MSG%',
    '%EDIT_NTC_SUB%' => 'Subject Assigned',
    '%EDIT_SUB%' => 'Edit Subject',
    '%EDIT_USER%' => 'Edit User',
    '%ED_CLS%' => 'Assign Classes',
    '%ED_CLS_MSG%' => 'Edit Class Message',
    '%ED_NTC_CLS%' => 'Classes Assigned',
    '%EditClass%' => 'Edit Class Name',
    '%EditSubject%' => 'Update Class',
    '%EditSubjects%' => 'Assign Subjects',
    '%NO_US_ID%' => '%NO_US_ID%',
    '%NameEditSubject%' => 'Name of Subject',
    '%NewClassAdded%' => 'New Class Added',
    '%NewSubjectAdded%' => 'New Subject Added',
    '%STUDENTS%' => 'Students',
    '%SUBS_ADDED%' => '%SUBS_ADDED%',
    '%SUB_ADDED_MSG%' => '%SUB_ADDED_MSG%',
    '%StudentUpdated%' => 'Student Updated',
    '%SubAddedWr%' => '%SubAddedWr%',
    '%Subject Updated%' => 'Subject Updated',
    '%SubjectDeleted%' => 'Subject Deleted',
    '%Subjects%' => 'All Subjects',
    '%TEACHERS%' => 'Instructors',
    '%USER%' => 'User',
    '%USERS%' => 'All Users',
    '%USER_ADDED%' => 'User Added',
    '%US_UD%' => 'User Updated',
    '%Update ClassAddClassForm%' => 'Update Class',
    '%Update ClassesTeacherEditClass%' => 'Update Class Teacher',
    '%Update SubjectBtn%' => 'Update Subject',
    '%Update SubjectEditSubject%' => 'Update Subject',
    '%Update Subject_EditSubjectForm%' => 'Assign Subjects',
    '%UpdateStudent%' => 'Update Student',
    '%User%' => 'User',
    '%classNameAddClassForm%' => 'Class Name',
    '%className_addClassFrom%' => 'Enter Class Name',
    '%classesEditSubject%' => 'Add Subjects',
    '%classesEditSubjectForm%' => 'Assign Subjects to Class',
    '%classesTeacherEditClass%' => 'Instructor\'s Assigned Classes',
    '%existContact% is already in the database. Please try with new Phone Number' => '%existContact% is already in the database. Please try with new Phone Number',
    '%existEmail% is already in the database. Please try with new Email' => '%existEmail% is already in the database. Please try with new Email',
    '%existPhone% is already in the database. Please try with new Phone Number' => '%existPhone% is already in the database. Please try with new Phone Number',
    '%existUname% is already in the database. Please try with new Email' => '%existUname% is already in the database. Please try with new Email',
    'Actions' => 'Actions',
    'Add New Class' => 'Add New Class',
    'Add New Hall' => 'Add New Hall',
    'Add New Subject' => 'Add New Subject',
    'Add New User' => 'Add New User',
    'Add Newsfeed' => 'Add Newsfeed',
    'Add Schedule' => 'Add Schedule',
    'Add Subject' => 'Add Subject',
    'Add Suject' => 'Add Subject',
    'Add_Message_notification' => 'Add_Message_notification',
    'Added by' => 'Added by',
    'All Classes' => 'All Classes',
    'All Subjects' => 'All Subjects',
    'All Tasks' => 'All Tasks',
    'All Users' => 'All Users',
    'Are you sure to delete' => 'Are you sure to delete',
    'Are you sure to delete subject' => 'Are you sure to delete subject',
    'Class' => 'Class',
    'Class ID' => 'Class ID',
    'Class Name' => 'Class Name',
    'ClassName' => 'ClassName',
    'Classes' => 'Classes',
    'Content' => 'Content',
    'Content_notification' => 'Content_notification',
    'Current Class' => 'Current Class',
    'Current Parent' => 'Current Parent',
    'Date' => 'Date',
    'Date Added' => 'Date Added',
    'Delete' => 'Delete',
    'Delete_notification' => 'Delete_notification',
    'Description' => 'Description',
    'Due Date' => 'Due Date',
    'Dutch' => 'Dutch',
    'Edit' => 'Edit',
    'Edit_notification' => 'Edit_notification',
    'Email' => 'Email',
    'English' => 'English',
    'Error' => 'Error',
    'French' => 'French',
    'From' => 'From',
    'Go Back' => 'Go Back',
    'Hall Name' => 'Hall Name',
    'Image' => 'Image',
    'Inbox' => 'Inbox',
    'Info' => 'Info',
    'Language_notification' => 'Language_notification',
    'Last Login' => 'Last Login',
    'Logs' => 'Logs',
    'Manage' => 'Manage',
    'Message' => 'Message',
    'Name' => 'Name',
    'New Class' => 'New Class',
    'News Content' => 'News Content',
    'Not assigned yet' => 'Not assigned yet',
    'PDF URL' => 'PDF URL',
    'Parent cannot be deleted. Already assigned as parent for %childs% student(s)' => 'Parent cannot be deleted. Already assigned as parent for %childs% student(s)',
    'Phone Number' => 'Phone Number',
    'ROLE_ADMIN' => 'ROLE_ADMIN',
    'ROLE_PARENT' => 'ROLE_PARENT',
    'ROLE_STUDENT' => 'ROLE_STUDENT',
    'ROLE_TEACHER' => 'ROLE_TEACHER',
    'Read Message' => 'Read Message',
    'Recipients' => 'Recipients',
    'Role Admin cannot have  Student, Teacher or Parent roles' => 'Role Admin cannot have  Student, Teacher or Parent roles',
    'Role Student cannot have Admin, Teacher or Parent roles' => 'Role Student cannot have Admin, Teacher or Parent roles',
    'Sender' => 'Sender',
    'Students' => 'Students',
    'Subject' => 'Subject',
    'Subject ID' => 'Subject ID',
    'Subject Name' => 'Subject Name',
    'Subjects' => 'Subjects',
    'Sujects' => 'Sujects',
    'Teacher' => 'Teacher',
    'Teacher Name' => 'Teacher Name',
    'Teacher can not be deleted. Already assigned as parent for %students% student(s)' => 'Teacher can not be deleted. Already assigned as parent for %students% student(s)',
    'Teacher can not be deleted. Already assigned to %classes% class(es)' => 'Teacher can not be deleted. Already assigned to %classes% class(es)',
    'Teachers' => 'Instructors',
    'Title' => 'Title',
    'To' => 'To',
    'Translate-menu' => 'Translate-menu',
    'Translate-popup-button-no' => 'Translate-popup-button-no',
    'Translate-popup-button-yes' => 'Translate-popup-button-yes',
    'Translate-popup-content' => 'Translate-popup-content',
    'Translate-popup-heading' => 'Translate-popup-heading',
    'Unread Message' => 'Unread Message',
    'Username' => 'Username',
    'Users' => 'Users',
    'View' => 'View',
    'Yes' => 'Yes',
    'Yes, Delete' => 'Yes, Delete',
    'Yes, Delete this news' => 'Yes, Delete this news',
    'allUser-Address' => 'Address',
    'allUser-Email' => 'allUser-Email',
    'allUser-Language' => 'Language',
    'allUser-Name' => 'allUser-Name',
    'allUser-Postcode' => 'Postal Code',
    'allUser-Role' => 'Role',
    'allUser-Username' => 'allUser-Username',
    'allUser-conatct_number' => 'Mobile',
    'allUser-lastLogin' => 'allUser-lastLogin',
    'allUser-phoneNumber' => 'allUser-phoneNumber',
    'are u sure?' => 'are u sure?',
    'class-all-popup-heading' => 'Class Info',
    'class_name_all_view' => 'Class Name',
    'class_student-csv-box-title' => 'class_student-csv-box-title',
    'class_subjects_all_view' => 'Subjects (comma separated)',
    'class_subs-csv-box-title' => 'class_subs-csv-box-title',
    'class_taskByTeacher' => 'class_taskByTeacher',
    'class_teacher-csv-box-title' => 'class_teacher-csv-box-title',
    'classes-csv-box-title' => 'classes-csv-box-title',
    'csv-downlord' => 'csv-downlord',
    'csv-user-import' => 'csv-user-import',
    'csv-user-sample' => 'csv-user-sample',
    'csv-user-upload' => 'csv-user-upload',
    'csvValidationButton-format_correct' => 'csvValidationButton-format_correct',
    'csvValidationButton-format_wrong' => 'csvValidationButton-format_wrong',
    'csv_error' => 'csv_error',
    'csv_error_msg' => 'csv_error_msg',
    'csv_sucess' => 'csv_sucess',
    'csv_sucess_msg' => 'csv_sucess_msg',
    'halls-csv-box-title-csv-box-title' => 'halls-csv-box-title-csv-box-title',
    'news-all-popup-Content' => 'news-all-popup-Content',
    'news-all-popup-addedBy' => 'news-all-popup-addedBy',
    'news-all-popup-dateAdded' => 'news-all-popup-dateAdded',
    'news-all-popup-heading' => 'news-all-popup-heading',
    'news-all-popup-imagePath' => 'news-all-popup-imagePath',
    'news-all-popup-title' => 'news-all-popup-title',
    'not-assigned' => 'not-assigned',
    'notification_outbox_btn' => 'notification_outbox_btn',
    'parentUser-chuld' => 'parentUser-chuld',
    'parentUser-email' => 'parentUser-email',
    'parentUser-lastLogin' => 'parentUser-lastLogin',
    'parentUser-name' => 'parentUser-name',
    'parentUser-phoneNumber' => 'parentUser-phoneNumber',
    'parentUser-username' => 'parentUser-username',
    'studenUser-class' => 'Class',
    'studenUser-email' => 'Email',
    'studenUser-lastLogin' => 'Last Login',
    'studenUser-name' => 'Name',
    'studenUser-phoneNumber' => 'Phone Number',
    'studenUser-username' => 'Username',
    'studentUser-subject' => 'Subjects',
    'student_list_view_class_column_title' => 'student_list_view_class_column_title',
    'student_parent-csv-box-title' => 'Parent',
    'subjects-csv-box-title' => 'subjects-csv-box-title',
    'teacherUser-children' => 'Children',
    'teacherUser-email' => 'Email',
    'teacherUser-lastLogin' => 'Last Login',
    'teacherUser-name' => 'Name',
    'teacherUser-phoneNumber' => 'Phone Number',
    'teacherUser-subjects' => 'Subjects',
    'teacherUser-userName' => 'Username',
    'teacher_subjects-csv-box-title' => 'teacher_subjects-csv-box-title',
    'user-all-popup-heading' => 'User Info',
    'user.phoneNumber' => 'user.phoneNumber',
    'user_admin' => 'user_admin',
    'user_language_english' => 'English',
    'user_language_france' => 'French',
    'user_language_netherland' => 'Dutch',
    'user_parent' => 'Parent',
    'user_student' => 'Student',
    'user_teacher' => 'Instructor',
    'users-csv-box-title' => 'users-csv-box-title',
  ),
  'forms' => 
  array (
    '' => '',
    'Add Classes_classSubjectType' => 'Add Classes_classSubjectType',
    'Add User_addUserFrom' => 'Add User',
    'Add to Student_classType' => 'Update Student',
    'AddClass_classTypeform' => 'AddClass_classTypeform',
    'Dutch' => 'Dutch',
    'Edit User_edit_user_form' => 'Edit User',
    'English' => 'English',
    'French' => 'French',
    'Language' => 'Language',
    'Subjects_classSubjectEditType' => 'Subjects_classSubjectEditType',
    'Update Student_StudentEditform' => 'Update Student',
    'Update Subjects_classSubjectEditType' => 'Update Subjects_classSubjectEditType',
    'address_addressType' => 'Address',
    'address_edit_user_form' => 'Address ',
    'class_StudentEditform' => 'Class',
    'class_classType' => 'Assign Class',
    'class_classTypeform' => 'class_classTypeform',
    'contactNumber_addressType' => 'Contact Number',
    'contactNumber_edit_user_form' => 'Contact Number',
    'email_addUserFrom' => 'Email',
    'email_edit_user_form' => 'Email',
    'firstname_addUserFrom' => 'First Name',
    'firstname_edit_user_form' => 'First Name',
    'lastname_addUserFrom' => 'Last Name',
    'lastname_edit_user_form' => 'Last Name',
    'locale_addUserFrom' => 'User\'s Language',
    'locale_edit_user_form' => 'User\'s Language',
    'password_addUserFrom' => 'Password',
    'phonenumber_addUserFrom' => 'Phone Number',
    'phonenumber_edit_user_form' => 'Phone Number',
    'postCode_edit_user_form' => 'Post Code',
    'subject_class_subject_type' => 'subject_class_subject_type',
    'username_addUserFrom' => 'Username',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated.',
    'group.flash.created' => 'The group has been created.',
    'group.flash.deleted' => 'The group has been deleted.',
    'security.login.username' => 'Username',
    'security.login.password' => 'Password',
    'security.login.remember_me' => 'Remember me',
    'security.login.submit' => 'Log in',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Update',
    'profile.flash.updated' => 'The profile has been updated.',
    'change_password.submit' => 'Change password',
    'change_password.flash.success' => 'The password has been changed.',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.
',
    'registration.confirmed' => 'Congrats %username%, your account is now activated.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Register',
    'registration.flash.user_created' => 'The user has been created successfully.',
    'registration.email.subject' => 'Welcome %username%!',
    'registration.email.message' => 'Hello %username%!

To finish activating your account - please visit %confirmationUrl%

This link can only be used once to validate your account.

Regards,
the Team.
',
    'resetting.check_email' => 'An email has been sent. It contains a link you must click to reset your password.
Note: You can only request a new password once within %tokenLifetime% hours.

If you don\'t get an email check your spam folder or try again.
',
    'resetting.request.username' => 'Username or email address',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully.',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Log out',
    'layout.login' => 'Log in',
    'layout.register' => 'Register',
    'layout.logged_in_as' => 'Logged in as %username%',
    'form.group_name' => 'Group name',
    'form.username' => 'Username',
    'form.email' => 'Email',
    'form.current_password' => 'Current password',
    'form.password' => 'Password',
    'form.password_confirmation' => 'Repeat password',
    'form.new_password' => 'New password',
    'form.new_password_confirmation' => 'Repeat new password',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
