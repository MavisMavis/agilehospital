-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2017 at 01:07 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `disease_id` int(11) NOT NULL,
  `name` varchar(99) NOT NULL,
  `description` longtext NOT NULL,
  `picture` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`disease_id`, `name`, `description`, `picture`) VALUES
(1, 'Smallpox', 'Smallpox was an infectious disease caused by one of two virus variants, Variola major or Variola minor.[3] The last naturally occurring case of smallpox (Variola minor) was diagnosed on 26 October 1977.\r\n\r\nInfection with smallpox is focused in small blood vessels of the skin and in the mouth and throat before disseminating. In the skin it results in a characteristic maculopapular rash and, later, raised fluid-filled blisters. V. major produced a more serious disease and had an overall mortality rate of 30–35 percent. V. minor caused a milder form of disease (also known as alastrim) which killed about 1 percent of those it infects.[5][6] Long-term complications of V. major infection included characteristic scars, commonly on the face, which occur in 65–85 percent of survivors.[7] Blindness resulting from corneal ulceration and scarring, and limb deformities due to arthritis and osteomyelitis were less common complications, seen in about 2–5 percent of cases.\r\n\r\nSmallpox is believed to have been acquired by humans originally as a zoonosis from a terrestrial African rodent between 16,000 and 68,000 years ago, well before the dawn of agriculture and civilization. The earliest physical evidence of it is probably the pustular rash on the mummified body of Pharaoh Ramses V of Egypt.[8] The disease killed an estimated 400,000 Europeans annually during the closing years of the 18th century (including five reigning monarchs),[9] and was responsible for a third of all blindness.[5][10] Of all those infected, 20–60 percent—and over 80 percent of infected children—died from the disease.[11] Smallpox was responsible for an estimated 300–500 million deaths during the 20th century.[12][13][14] As recently as 1967, the World Health Organization (WHO) estimated that 15 million people contracted the disease and that two million died in that year.[4]\r\n\r\nAfter vaccination campaigns throughout the 19th and 20th centuries, the WHO certified the global eradication of smallpox in 1980.[4] Smallpox is one of two infectious diseases to have been eradicated, the other being rinderpest, which was declared eradicated in 2011.[15][16][17] The disease is also known by the Latin names variola or variola vera, derived from varius (\"spotted\") or varus (\"pimple\"). The disease was originally known in English as the \"pox\"[1] or \"red plague\";[2] the term \"smallpox\" was first used in Britain in the 15th century to distinguish variola from the \"great pox\" (syphilis).[18]', 'images/Disease/SmallPox.jpg'),
(2, 'Tuberculosis', 'Tuberculosis (TB) is an infectious disease usually caused by the bacterium Mycobacterium tuberculosis (MTB).[1] Tuberculosis generally affects the lungs, but can also affect other parts of the body.[1] Most infections do not have symptoms, in which case it is known as latent tuberculosis.[1] About 10% of latent infections progress to active disease which, if left untreated, kills about half of those infected.[1] The classic symptoms of active TB are a chronic cough with blood-containing sputum, fever, night sweats, and weight loss.[1] The historical term \"consumption\" came about due to the weight loss.[4] Infection of other organs can cause a wide range of symptoms.[5]\r\n\r\nTuberculosis is spread through the air when people who have active TB in their lungs cough, spit, speak, or sneeze.[1][6] People with latent TB do not spread the disease.[1] Active infection occurs more often in people with HIV/AIDS and in those who smoke.[1] Diagnosis of active TB is based on chest X-rays, as well as microscopic examination and culture of body fluids.[7] Diagnosis of latent TB relies on the tuberculin skin test (TST) or blood tests.[7]\r\n\r\nPrevention of TB involves screening those at high risk, early detection and treatment of cases, and vaccination with the bacillus Calmette-Guérin vaccine.[8][9][10] Those at high risk include household, workplace, and social contacts of people with active TB.[10] Treatment requires the use of multiple antibiotics over a long period of time.[1] Antibiotic resistance is a growing problem with increasing rates of multiple drug-resistant tuberculosis (MDR-TB).[1]\r\n\r\nOne-third of the world\'s population is thought to be infected with TB.[1] New infections occur in about 1% of the population each year.[11] In 2014, there were 9.6 million cases of active TB which resulted in 1.5 million deaths.[1] More than 95% of deaths occurred in developing countries.[1] The number of new cases each year has decreased since 2000.[1] About 80% of people in many Asian and African countries test positive while 5–10% of people in the United States population tests positive by the tuberculin test.[12] Tuberculosis has been present in humans since ancient times.[13]', 'images/Disease/Tubercolosis.jpg'),
(3, 'Syphilis', 'Syphilis is a sexually transmitted infection caused by the bacterium Treponema pallidum subspecies pallidum.[2] The signs and symptoms of syphilis vary depending in which of the four stages it presents (primary, secondary, latent, and tertiary).[1] The primary stage classically presents with a single chancre (a firm, painless, non-itchy skin ulceration) but there may be multiple sores.[1] In secondary syphilis a diffuse rash occurs, which frequently involves the palms of the hands and soles of the feet.[1] There may also be sores in the mouth or vagina.[1] In latent syphilis, which can last for years, there are few or no symptoms.[1] In tertiary syphilis there are gummas (soft non-cancerous growths), neurological, or heart symptoms.[5] Syphilis has been known as \"the great imitator\" as it may cause symptoms similar to many other diseases.[1][5]\r\n\r\nSyphilis is most commonly spread through sexual activity.[1] It may also be transmitted from mother to baby during pregnancy or at birth, resulting in congenital syphilis.[1][6] Other human diseases caused by related Treponema pallidum subspecies include yaws (subspecies pertenue), pinta (subspecies carateum), and bejel (subspecies endemicum).[5] Diagnosis is usually made by using blood tests; the bacteria can also be detected using dark field microscopy.[1] The Center for Disease Control recommends all pregnant women be tested.[1]\r\n\r\nThe risk of sexual transmission of syphilis can be reduced by using a latex condom.[1] Syphilis can be effectively treated with antibiotics.[2] The preferred antibiotic for most cases is benzathine penicillin G injected into a muscle.[2] In those who have a severe penicillin allergy, doxycycline or tetracycline may be used.[2] In those with neurosyphilis, intravenous penicillin G potassium or ceftriaxone is recommended.[2] During treatment people may develop fever, headache, and muscle pains, a reaction known as Jarisch-Herxheimer.[2]\r\n\r\nIn 2015, about 45.4 million people were infected with syphilis,[3] with 6 million new cases.[7] During 2015, it caused about 107,000 deaths, down from 202,000 in 1990.[8][4] After decreasing dramatically with the availability of penicillin in the 1940s, rates of infection have increased since the turn of the millennium in many countries, often in combination with human immunodeficiency virus (HIV).[5][9] This is believed to be partly due to increased promiscuity, prostitution, decreasing use of condoms, and unsafe sexual practices among men who have sex with men.[10][11][12] In 2015, Cuba became the first country in the world to eliminate mother-to-child transmission of syphilis.[13]', 'images/Disease/Syphilis.jpg'),
(4, 'HIV/AIDS', 'Human immunodeficiency virus infection and acquired immune deficiency syndrome (HIV/AIDS) is a spectrum of conditions caused by infection with the human immunodeficiency virus (HIV).[9][10][11] Following initial infection, a person may not notice any symptoms or may experience a brief period of influenza-like illness.[5] Typically, this is followed by a prolonged period with no symptoms.[6] As the infection progresses, it interferes more with the immune system, increasing the risk of common infections like tuberculosis, as well as other opportunistic infections, and tumors that rarely affect people who have working immune systems.[5] These late symptoms of infection are referred to as acquired immunodeficiency syndrome (AIDS).[6] This stage is often also associated with weight loss.[6]\r\n\r\nHIV is spread primarily by unprotected sex (including anal and oral sex), contaminated blood transfusions, hypodermic needles, and from mother to child during pregnancy, delivery, or breastfeeding.[12] Some bodily fluids, such as saliva and tears, do not transmit HIV.[13] Methods of prevention include safe sex, needle exchange programs, treating those who are infected, and male circumcision.[5] Disease in a baby can often be prevented by giving both the mother and child antiretroviral medication.[5] There is no cure or vaccine; however, antiretroviral treatment can slow the course of the disease and may lead to a near-normal life expectancy.[6][7] Treatment is recommended as soon as the diagnosis is made.[14] Without treatment, the average survival time after infection is 11 years.[15]\r\n\r\nIn 2016 about 36.7 million people were living with HIV and it resulted in 1 million deaths.[16] There were 300,000 fewer new HIV cases in 2016 than in 2015.[17] Most of those infected live in sub-Saharan Africa.[5] Between its discovery and 2014 AIDS has caused an estimated 39 million deaths worldwide.[18] HIV/AIDS is considered a pandemic—a disease outbreak which is present over a large area and is actively spreading.[19] HIV is believed to have originated in west-central Africa during the late 19th or early 20th century.[20] AIDS was first recognized by the United States Centers for Disease Control and Prevention (CDC) in 1981 and its cause—HIV infection—was identified in the early part of the decade.[21]\r\n\r\nHIV/AIDS has had a great impact on society, both as an illness and as a source of discrimination.[22] The disease also has large economic impacts.[22] There are many misconceptions about HIV/AIDS such as the belief that it can be transmitted by casual non-sexual contact.[23] The disease has become subject to many controversies involving religion including the Catholic Church\'s position not to support condom use as prevention.[24] It has attracted international medical and political attention as well as large-scale funding since it was identified in the 1980s.[25]', 'images/Disease/HIV_AIDS.jpg'),
(5, 'Influenza', 'Influenza, commonly known as \"the flu\", is an infectious disease caused by an influenza virus.[1] Symptoms can be mild to severe.[4] The most common symptoms include: a high fever, runny nose, sore throat, muscle pains, headache, coughing, and feeling tired.[1] These symptoms typically begin two days after exposure to the virus and most last less than a week.[1] The cough, however, may last for more than two weeks.[1] In children, there may be nausea and vomiting, but these are not common in adults.[5] Nausea and vomiting occur more commonly in the unrelated infection gastroenteritis, which is sometimes inaccurately referred to as \"stomach flu\" or \"24-hour flu\".[5] Complications of influenza may include viral pneumonia, secondary bacterial pneumonia, sinus infections, and worsening of previous health problems such as asthma or heart failure.[4][2]\r\n\r\nThree types of influenza viruses affect people, called Type A, Type B, and Type C.[2] Usually, the virus is spread through the air from coughs or sneezes.[1] This is believed to occur mostly over relatively short distances.[6] It can also be spread by touching surfaces contaminated by the virus and then touching the mouth or eyes.[4][6] A person may be infectious to others both before and during the time they are showing symptoms.[4] The infection may be confirmed by testing the throat, sputum, or nose for the virus.[2] A number of rapid tests are available; however, people may still have the infection if the results are negative.[2] A type of polymerase chain reaction that detects the virus\'s RNA is more accurate.[2]\r\n\r\nFrequent hand washing reduces the risk of viral spread.[3] Wearing a surgical mask is also useful.[3] Yearly vaccinations against influenza are recommended by the World Health Organization for those at high risk.[1] The vaccine is usually effective against three or four types of influenza.[1] It is usually well tolerated.[1] A vaccine made for one year may not be useful in the following year, since the virus evolves rapidly.[1] Antiviral drugs such as the neuraminidase inhibitor oseltamivir, among others, have been used to treat influenza.[1] Their benefits in those who are otherwise healthy do not appear to be greater than their risks.[7] No benefit has been found in those with other health problems.[7][8]\r\n\r\nInfluenza spreads around the world in a yearly outbreak, resulting in about three to five million cases of severe illness and about 250,000 to 500,000 deaths.[1] In the Northern and Southern parts of the world, outbreaks occur mainly in winter while in areas around the equator outbreaks may occur at any time of the year.[1] Death occurs mostly in the young, the old and those with other health problems.[1] Larger outbreaks known as pandemics are less frequent.[2] In the 20th century, three influenza pandemics occurred: Spanish influenza in 1918 (~50 million deaths), Asian influenza in 1957 (two million deaths), and Hong Kong influenza in 1968 (one million deaths).[9] The World Health Organization declared an outbreak of a new type of influenza A/H1N1 to be a pandemic in June 2009.[10] Influenza may also affect other animals, including pigs, horses and birds.[11]', 'images/Disease/Influenza.jpg'),
(6, 'Ebola', 'Ebola virus disease (EVD), also known as Ebola hemorrhagic fever (EHF) or simply Ebola, is a viral hemorrhagic fever of humans and other primates caused by ebolaviruses.[1] Signs and symptoms typically start between two days and three weeks after contracting the virus with a fever, sore throat, muscular pain, and headaches.[1] Then, vomiting, diarrhea and rash usually follow, along with decreased function of the liver and kidneys.[1] At this time, some people begin to bleed both internally and externally.[1] The disease has a high risk of death, killing between 25 and 90 percent of those infected, with an average of about 50 percent.[1] This is often due to low blood pressure from fluid loss, and typically follows six to sixteen days after symptoms appear.[2]\r\n\r\nThe virus spreads by direct contact with body fluids, such as blood, of an infected human or other animals.[1] This may also occur through contact with an item recently contaminated with bodily fluids.[1] Spread of the disease through the air between primates, including humans, has not been documented in either laboratory or natural conditions.[3] Semen or breast milk of a person after recovery from EVD may carry the virus for several weeks to months.[1][4][5] Fruit bats are believed to be the normal carrier in nature, able to spread the virus without being affected by it.[1] Other diseases such as malaria, cholera, typhoid fever, meningitis and other viral hemorrhagic fevers may resemble EVD.[1] Blood samples are tested for viral RNA, viral antibodies or for the virus itself to confirm the diagnosis.[1]\r\n\r\nControl of outbreaks requires coordinated medical services, alongside a certain level of community engagement.[1] The medical services include rapid detection of cases of disease, contact tracing of those who have come into contact with infected individuals, quick access to laboratory services, proper healthcare for those who are infected, and proper disposal of the dead through cremation or burial.[1][6] Samples of body fluids and tissues from people with the disease should be handled with special caution.[1] Prevention includes limiting the spread of disease from infected animals to humans.[1] This may be done by handling potentially infected bushmeat only while wearing protective clothing and by thoroughly cooking it before eating it.[1] It also includes wearing proper protective clothing and washing hands when around a person with the disease.[1] No specific treatment or vaccine for the virus is available, although a number of potential treatments are being studied.[1] Supportive efforts, however, improve outcomes.[1] This includes either oral rehydration therapy (drinking slightly sweetened and salty water) or giving intravenous fluids as well as treating symptoms.[1]\r\n\r\nThe disease was first identified in 1976 in two simultaneous outbreaks, one in Nzara, and the other in Yambuku, a village near the Ebola River from which the disease takes its name.[7] EVD outbreaks occur intermittently in tropical regions of sub-Saharan Africa.[1] Between 1976 and 2013, the World Health Organization reports a total of 24 outbreaks involving 1,716 cases.[1][8] The largest outbreak to date was the epidemic in West Africa, which occurred from December 2013 to January 2016 with 28,616 cases and 11,310 deaths.[9][10][11] It was declared no longer an emergency on 29 March 2016.[12] Another outbreak in Africa began in May 2017 in the Democratic Republic of the Congo.[13][14]', 'images/Disease/Ebola.jpg'),
(7, 'Cholera', 'Cholera is an infection of the small intestine by some strains of the bacterium Vibrio cholerae.[3][2] Symptoms may range from none, to mild, to severe.[2] The classic symptom is large amounts of watery diarrhea that lasts a few days.[1] Vomiting and muscle cramps may also occur.[2] Diarrhea can be so severe that it leads within hours to severe dehydration and electrolyte imbalance.[1] This may result in sunken eyes, cold skin, decreased skin elasticity, and wrinkling of the hands and feet.[4] The dehydration may result in the skin turning bluish.[7] Symptoms start two hours to five days after exposure.[2]\r\n\r\nCholera is caused by a number of types of Vibrio cholerae, with some types producing more severe disease than others.[1] It is spread mostly by unsafe water and unsafe food that has been contaminated with human feces containing the bacteria.[1] Undercooked seafood is a common source.[8] Humans are the only animal affected.[1] Risk factors for the disease include poor sanitation, not enough clean drinking water, and poverty.[1] There are concerns that rising sea levels will increase rates of disease.[1] Cholera can be diagnosed by a stool test.[1] A rapid dipstick test is available but is not as accurate.[9]\r\n\r\nPrevention involves improved sanitation and access to clean water.[4] Cholera vaccines that are given by mouth provide reasonable protection for about six months.[1] They have the added benefit of protecting against another type of diarrhea caused by E. coli.[1] The primary treatment is oral rehydration therapy—the replacement of fluids with slightly sweet and salty solutions.[1] Rice-based solutions are preferred.[1] Zinc supplementation is useful in children.[5] In severe cases, intravenous fluids, such as Ringer\'s lactate, may be required, and antibiotics may be beneficial.[1] Testing to see which antibiotic the cholera is susceptible to can help guide the choice.[2]\r\n\r\nCholera affects an estimated 3–5 million people worldwide and causes 28,800–130,000 deaths a year.[1][6] Although it is classified as a pandemic as of 2010, it is rare in the developed world.[1] Children are mostly affected.[1][10] Cholera occurs as both outbreaks and chronically in certain areas.[1] Areas with an ongoing risk of disease include Africa and south-east Asia.[1] While the risk of death among those affected is usually less than 5%, it may be as high as 50% among some groups who do not have access to treatment.[1] Historical descriptions of cholera are found as early as the 5th century BC in Sanskrit.[4] The study of cholera in England by John Snow between 1849 and 1854 led to significant advances in the field of epidemiology.[4][11]', 'images/Disease/Cholera.jpg'),
(8, 'Malaria', 'Malaria is a mosquito-borne infectious disease affecting humans and other animals caused by parasitic protozoans (a group of single-celled microorganisms) belonging to the Plasmodium type.[2] Malaria causes symptoms that typically include fever, tiredness, vomiting, and headaches.[1] In severe cases it can cause yellow skin, seizures, coma, or death.[1] Symptoms usually begin ten to fifteen days after being bitten.[2] If not properly treated, people may have recurrences of the disease months later.[2] In those who have recently survived an infection, reinfection usually causes milder symptoms.[1] This partial resistance disappears over months to years if the person has no continuing exposure to malaria.[1]\r\n\r\nThe disease is most commonly transmitted by an infected female Anopheles mosquito.[2] The mosquito bite introduces the parasites from the mosquito\'s saliva into a person\'s blood.[2] The parasites travel to the liver where they mature and reproduce.[1] Five species of Plasmodium can infect and be spread by humans.[1] Most deaths are caused by P. falciparum because P. vivax, P. ovale, and P. malariae generally cause a milder form of malaria.[1][2] The species P. knowlesi rarely causes disease in humans.[2] Malaria is typically diagnosed by the microscopic examination of blood using blood films, or with antigen-based rapid diagnostic tests.[1] Methods that use the polymerase chain reaction to detect the parasite\'s DNA have been developed, but are not widely used in areas where malaria is common due to their cost and complexity.[5]\r\n\r\nThe risk of disease can be reduced by preventing mosquito bites through the use of mosquito nets and insect repellents, or with mosquito control measures such as spraying insecticides and draining standing water.[1] Several medications are available to prevent malaria in travellers to areas where the disease is common.[2] Occasional doses of the combination medication sulfadoxine/pyrimethamine are recommended in infants and after the first trimester of pregnancy in areas with high rates of malaria.[2] Despite a need, no effective vaccine exists, although efforts to develop one are ongoing.[2] The recommended treatment for malaria is a combination of antimalarial medications that includes an artemisinin.[1][2] The second medication may be either mefloquine, lumefantrine, or sulfadoxine/pyrimethamine.[6] Quinine along with doxycycline may be used if an artemisinin is not available.[6] It is recommended that in areas where the disease is common, malaria is confirmed if possible before treatment is started due to concerns of increasing drug resistance.[2] Resistance among the parasites has developed to several antimalarial medications; for example, chloroquine-resistant P. falciparum has spread to most malarial areas, and resistance to artemisinin has become a problem in some parts of Southeast Asia.[2]\r\n\r\nThe disease is widespread in the tropical and subtropical regions that exist in a broad band around the equator.[1] This includes much of Sub-Saharan Africa, Asia, and Latin America.[2] In 2015, there were 296 million cases of malaria worldwide resulting in an estimated 731,000 deaths.[3][4] Approximately 90% of both cases and deaths occurred in Africa.[7] Rates of disease have decreased from 2000 to 2015 by 37%,[7] but increased from 2014 during which there were 198 million cases.[8] Malaria is commonly associated with poverty and has a major negative effect on economic development.[9][10] In Africa, it is estimated to result in losses of US$12 billion a year due to increased healthcare costs, lost ability to work, and negative effects on tourism.[11]', 'images/Disease/Malaria.jpg'),
(9, 'Yellow fever', 'Yellow fever is a viral disease of typically short duration.[3] In most cases, symptoms include fever, chills, loss of appetite, nausea, muscle pains particularly in the back, and headaches.[3] Symptoms typically improve within five days.[3] In about 15% of people within a day of improving, the fever comes back, abdominal pain occurs, and liver damage begins causing yellow skin.[3][6] If this occurs, the risk of bleeding and kidney problems is also increased.[3]\r\n\r\nThe disease is caused by the yellow fever virus and is spread by the bite of an infected female mosquito.[3] It infects only humans, other primates, and several species of mosquitoes.[3] In cities, it is spread primarily by Aedes aegypti, a type of mosquito found throughout the tropics and subtropics.[3] The virus is an RNA virus of the genus Flavivirus.[7] The disease may be difficult to tell apart from other illnesses, especially in the early stages.[3] To confirm a suspected case, blood sample testing with polymerase chain reaction is required.[4]\r\n\r\nA safe and effective vaccine against yellow fever exists and some countries require vaccinations for travelers.[3] Other efforts to prevent infection include reducing the population of the transmitting mosquito.[3] In areas where yellow fever is common and vaccination is uncommon, early diagnosis of cases and immunization of large parts of the population is important to prevent outbreaks.[3] Once infected, management is symptomatic with no specific measures effective against the virus.[3] Death occurs in up to half of those who get severe disease.[3][8]\r\n\r\nIn 2013, yellow fever resulted in about 127,000 severe infections and 45,000 deaths,[3] with nearly 90% of these occurring in Africa.[4] Nearly a billion people live in an area of the world where the disease is common.[3] It is common in tropical areas of South America and Africa, but not in Asia.[3][9] Since the 1980s, the number of cases of yellow fever has been increasing.[3][10] This is believed to be due to fewer people being immune, more people living in cities, people moving frequently, and changing climate.[3] The disease originated in Africa, from where it spread to South America through the slave trade in the 17th century.[1] Since the 17th century, several major outbreaks of the disease have occurred in the Americas, Africa, and Europe.[1] In the 18th and 19th centuries, yellow fever was seen as one of the most dangerous infectious diseases.[1] In 1927 yellow fever virus became the first human virus to be isolated.[7][11]', 'images/Disease/Yellow_fever.jpg'),
(10, 'Porphyria', 'Porphyria is a group of diseases in which substances called porphyrins build up, negatively affecting the skin or nervous system.[1] The types that affect the nervous system are also known as acute porphyria, as symptoms are rapid in onset and last a short time.[1] Symptoms of an attack include abdominal pain, chest pain, vomiting, confusion, constipation, fever, high blood pressure, and high heart rate.[1][2][4] The attacks usually last for days to weeks.[2] Complications may include paralysis, low blood sodium levels, and seizures.[4] Attacks may be triggered by alcohol, smoking, hormonal changes, fasting, stress, or certain medications.[2][4] If the skin is affected, blisters or itching may occur with sunlight exposure.[2]\r\n\r\nMost types of porphyria are inherited from a person\'s parents and are due to a mutation in one of the genes that make heme.[2] They may be inherited in an autosomal dominant, autosomal recessive, or X-linked dominant manner.[1] One type, porphyria cutanea tarda, may also be due to increased iron in the liver, hepatitis C, alcohol, or HIV/AIDS.[1] The underlying mechanism results in a decrease in the amount of heme produced and a build-up of substances involved in making heme.[1] Porphyrias may also be classified by whether the liver or the bone marrow is affected.[1] Diagnosis is typically by blood, urine, and stool tests.[2] Genetic testing may be done to determine the specific mutation.[2]\r\n\r\nTreatment depends on the type of porphyria and a person\'s symptoms.[2] The treatment of porphyria of the skin generally involves the avoidance of sunlight.[2] The treatment for acute porphyria may involve giving intravenous heme or a glucose solution.[2] Rarely a liver transplant may be carried out.[2]\r\n\r\nThe frequency of porphyria is unclear.[1] It is estimated that it affects 1 to 100 per 50,000 people.[1] Rates vary around the world.[2] Porphyria cutanea tarda is believed to be the most common type.[1] The disease was described at least as early as 370 BC by Hippocrates.[5] The underlying mechanism was first described by Felix Hoppe-Seyler in 1871.[5] The name porphyria is from the Greek ???????, porphyra, meaning \"purple\", a reference to the color of the urine that may occur during an attack.[5]', 'images/Disease/Porphyria.jpg'),
(11, 'Trachea', 'Aspergillosis is the name given to a wide variety of diseases caused by infection by fungi of the genus Aspergillus. The majority of cases occur in people with underlying illnesses such as tuberculosis[1] or chronic obstructive pulmonary disease (COPD), but with otherwise healthy immune systems.[2] Most commonly, aspergillosis occurs in the form of chronic pulmonary aspergillosis (CPA), aspergilloma or allergic bronchopulmonary aspergillosis (ABPA).[3] Some forms are intertwined; for example ABPA and simple aspergilloma can progress to CPA.\r\n\r\nOther, non-invasive manifestations include fungal sinusitis (both allergic in nature and with established fungal balls), otomycosis (ear infection), keratitis (eye infection) and onychomycosis (nail infection). In most instances these are less severe, and curable with effective antifungal treatment.\r\n\r\nPeople with deficient immune systems—such as patients undergoing hematopoietic stem cell transplantation, chemotherapy for leukaemia, or AIDS—are at risk of more disseminated disease. Acute invasive aspergillosis occurs when the immune system fails to prevent Aspergillus spores from entering the bloodstream via the lungs. Without the body mounting an effective immune response, fungal cells are free to disseminate throughout the body and can infect major organs such as the heart and kidneys.\r\n\r\nThe most frequently identified pathogen is Aspergillus fumigatus—a ubiquitous organism that is capable of living under extensive environmental stress. It is estimated that most humans inhale thousands of Aspergillus spores daily, but they do not affect most people’s health due to effective immune responses. Taken together, the major chronic, invasive and allergic forms of aspergillosis account for around 600,000 deaths annually worldwide.', 'images/Disease/Aspergillosis.jpg'),
(12, 'SARS', 'The SARS coronavirus, sometimes shortened to SARS-CoV, is the virus that causes severe acute respiratory syndrome (SARS).[1] On April 16, 2003, following the outbreak of SARS in Asia and secondary cases elsewhere in the world, the World Health Organization (WHO) issued a press release stating that the coronavirus identified by a number of laboratories was the official cause of SARS. Samples of the virus are being held in laboratories in New York City, San Francisco, Manila, Hong Kong, and Toronto.  On April 12, 2003, scientists working at the Michael Smith Genome Sciences Centre in Vancouver, British Columbia finished mapping the genetic sequence of a coronavirus believed to be linked to SARS. The team was led by Dr. Marco Marra and worked in collaboration with the British Columbia Centre for Disease Control and the National Microbiology Laboratory in Winnipeg, Manitoba, using samples from infected patients in Toronto. The map, hailed by the WHO as an important step forward in fighting SARS, is shared with scientists worldwide via the GSC website (see below). Dr. Donald Low of Mount Sinai Hospital in Toronto described the discovery as having been made with \"unprecedented speed\".[2] The sequence of the SARS coronavirus has since been confirmed by other independent groups.  The SARS coronavirus is one of several viruses identified by WHO as a likely cause of a future epidemic in a new plan developed after the Ebola epidemic for urgent research and development before and during an epidemic toward new diagnostic tests, vaccines and medicines.', 'images/Disease/SARS.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `patient_id` int(11) NOT NULL,
  `name` varchar(99) NOT NULL,
  `age` int(11) NOT NULL,
  `identity_number` bigint(20) NOT NULL,
  `address` varchar(99) NOT NULL,
  `cellphone` varchar(99) NOT NULL,
  `sex` varchar(99) NOT NULL,
  `syndrome` varchar(255) NOT NULL,
  `Diagnosis` text NOT NULL,
  `doctor_id` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`patient_id`, `name`, `age`, `identity_number`, `address`, `cellphone`, `sex`, `syndrome`, `Diagnosis`, `doctor_id`) VALUES
(1, 'Mavis Ong', 25, 930101075445, 'Medan Selera, 11, Lengkok Sembilang, 13700 Seberang Jaya, Pulau Pinang', '+60164066888', 'Female', 'Munchausen Syndrome', '-Patient exhibits serious delusion about their life. <br> -Believe to have been a victim of emotional abused by a colleague or lecturer. <br> -High sign of trauma occur recently. <br>', 1012),
(2, 'Brandon Lau', 23, 950101075555, '9-a-9 Taman Merpati, 12, Lengkok Limpeh 10500, Georgetown, Pulau Pinang', '+60124576282', 'Male', 'Cotard delusion', '-Patient keep claiming he had died and should not exist. <br> -Patient informed about feeling their organs and sense going numb. <br> -High resistance to pain factor and keep having hallucinations.<br>', 1012),
(3, 'Kee Khang Hng', 23, 950202075777, 'One Imperial, 10920 Lilitan Sungai Ara, Bayan Lepas, Pulau Pinang', '+60124814877', 'Male', 'Grandiose delusions', '-Patient declare that he is the beginning of humankind, a sign of God in the flesh. <br> -Patient also determine to have everyone address him as \"His Holiness\". <br> -Highly recommend sending to temple or mental institutions for further review.<br>', 1014),
(4, 'Tan Hock Lai', 25, 934568271469, 'Georgetown', '+60146987152', 'Male', 'God Syndrome', 'TOO PRO <br>  TOO NOOB <br>  TOO HAPPY <br>  TOO SAD <br>  TOO EMO <br>', 1014);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  `level` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `level`) VALUES
(1011, 'Admin', 'admin@gmail.com', '$2y$10$sdsezHCckvc3xnr2paIPSePNjZft7NeIpB.QJVmAIWbz9J7T0xCKS', 3),
(1012, 'doctor', 'doctor@yahoo.com', '$2y$10$I/j8ZA2TJ/TrxhuQXxzC3eFbv/Fh8nBftkE6gr31D9nupb8rnfEzW', 1),
(1013, 'nurse', 'nurse@gmail.com', '$2y$10$ZQtzt56bKkafjkB8ZhHaQO1dp541SvCdthjpR6AUaEqiaGwYiezrq', 2),
(1014, 'doctorDCute', 'dcute@yahoo.com', '$2y$10$Xmo8Zhzgk22YI8ourm1t0uiWMr7vLkfoj1/WWHsh98Mg/4mDoE6/W', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `id` int(99) NOT NULL,
  `name` varchar(99) NOT NULL,
  `department` varchar(99) NOT NULL,
  `cellphone` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`id`, `name`, `department`, `cellphone`) VALUES
(1011, 'Admin', 'Admin', 'Admin'),
(1012, 'Doctor Tan', 'Mental Case', '+6013754268'),
(1013, 'Lim Chia Yean', 'Nurse', '+6013754268'),
(1014, 'Doctor Dcute', 'Mental Case', '+60194687152');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `disease_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1015;

--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1015;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
