-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 06:38 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloger`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `bid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `bcategory` varchar(255) NOT NULL,
  `btitle` text NOT NULL,
  `bdesc` longtext DEFAULT NULL,
  `bimg` text DEFAULT NULL,
  `bcreated` date NOT NULL DEFAULT current_timestamp(),
  `bstatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`bid`, `uid`, `bcategory`, `btitle`, `bdesc`, `bimg`, `bcreated`, `bstatus`) VALUES
(1, 2, 'Demo', 'How Do You Determine the Technical Win?', 'The goal for many presales teams is to secure the Technical Win or Technical Close.  I’m curious, what criteria or measurement do you use to determine whether the Technical Win has taken place?\r\n\r\nFor example, is your definition based on the opinion of one or more individuals in your organization, or specific metrics, or positive affirmation from the prospect, or something else?\r\n\r\nSeparately, how often do you achieve a Technical Win but fail to close the business (e.g., due to “No Decision”, loss to a competitor, or other negative outcome)?', 'Thoughtful-Presales-Person-300x164.png', '2021-03-25', 1),
(6, 2, 'Demo', 'What is the significance of 33334?', 'That’s how many copies of Great Demo! have been purchased (not including those that have been resold or passed around).  This means that at least 33,334 people have been exposed to the Great Demo! methodology – but how many folks have actually changed their habits as a result of reading a book?\r\n\r\nPeople and companies make claims about numbers all the time – for example, I’ve heard vendors claim:\r\n\r\n“We have 2500 customers…”  (But how many of these are actually happy, referenceable customers?)\r\n“We’ve trained 100,000 people…”  (But how many of these are actually applying the training?)\r\n“Our customers report 50% more productivity and 25% less waste…” (But is this most or many customers – or just one?)\r\nAccordingly, I am curious:\r\n\r\nIf you’ve read Great Demo!, what kinds of improvements have you seen with your demos?\r\nWhat ideas from the book have had the most impact for you?\r\nAnd finally, what parts of the book would you like to understand more clearly – e.g., specific ideas or implementation with your software and sales practices?', '33334-300x149.png', '2021-03-25', 1),
(7, 2, 'Demo', 'Should There Be Both Sales AND Presales Motions?', 'HubSpot defines Sales Motion as, “A sales motion is the combination of the actionable steps and general sales philosophy an organization employs to sell a product or service to prospects and customers.  Sales motions often vary depending on the nature of the company enacting them and the buyer persona that business is trying to appeal to.”\r\n\r\nA search on Google for “sales motion” yields “About 18,800,000 results”, with hundreds (likely thousands) using the exact term…\r\n\r\nSearching “presales motion” generated “About 1,390,000 results”, but with only one using the exact term.  (Which was done by me, describing Great Demo! training on the Presales Collective Education page.)\r\n\r\nSadly, there is no definition for Presales Motions…  Perhaps there should be!  Here’s a draft, based on the HubSpot wording above:\r\n\r\n“A Presales Motion is the combination of the actionable steps and general presales philosophy an organization employs to secure the technical close or win for a product or service to prospects and customers.”\r\n\r\nSome examples of Presales Motions?  How about:\r\n\r\nDiscovery that complements and goes beyond sales’ Discovery\r\nVision Generation Demos (could be both sales and presales motions)\r\nVision Reengineering\r\nSolution Mapping\r\nTechnical Proof Demos\r\nExecuting POCs (and “workshops”, POVs, etc.)\r\nAny “motion” that is done exclusively or typically by presales in the process of securing the technical close or win…\r\nThoughts?', 'Sales-Process-Salesforce-Essentials-300x82.png', '2021-03-25', 1),
(8, 2, 'Demo', 'Demo Data:  The Importance of Problems, Gaps, and Exceptions', 'I was working with a vendor on an example demo and we identified a dashboard to serve as an Illustration (a “Wow!” screen for that use case) – but while the dashboard had all the right data elements, the data itself was uncompelling.  There were no problems, gaps, or exceptions exhibited.  Everything looked “OK”.\r\n\r\nWhile this could be a good example of a desired future state, it is insufficient to build vision of how problems are surfaced and solved.\r\n\r\nWhen you are creating demo data, be sure to include at least three sets of scenarios:\r\n\r\n“Before” scenarios, where important problems are clearly represented;\r\n“During” scenarios, where these problems can be shown being addressed;\r\n“After” scenarios, where the history of problem(s) identification and resolution can be presented.\r\nEven better, in addition to problem-based use cases, also consider including outlier situations – e.g., intriguing gaps in time-series, exceptions to otherwise regular patterns, and opportunities to be exploited.\r\n\r\nBring your demo data alive…!  For more ideas on improving your demo environment, see our article on the topic at https://greatdemo.com/a-perfect-demo-environment/.  Enjoy!\r\n\r\nAdditional Note:  Even if your demo environment lacks this data today, there may be an easy way to “doctor” the data using one of the emerging demo enablement/automation tools.  Stay tuned for more on these new tools as they appear…!', 'Boring-Graph-300x162.png', '2021-03-25', 1),
(9, 2, 'Demo1', 'Discovery Questioning Skills – Doctors vs. Lawyers', 'Consider the following, with respect to Discovery questioning strategies:\r\n\r\nDoctors seek to understand, so that they can offer an accurate diagnosis;\r\nLawyers seek to understand, but with a bias so that they can move the discussion to or from a position.\r\nWhen doing Discovery, consider using both types of questions – “Diagnostic”, simply seeking to understand the prospect’s situation, and “Biased”, seeking to move or change the prospect’s thinking.\r\n\r\nDiagnostic Questions should be the majority in your Discovery conversations, if you are trying to build trust and credibility with your prospect.\r\n\r\nUse Biased Questions when you are working to:\r\n\r\nReengineer a prospect’s vision of a solution\r\nOutflank competition\r\nDeeper or broaden “pain” beyond simple diagnosis – e.g., reengineer the prospect’s understanding of their current situation.', 'Doctor-Lawyer-300x202.png', '2021-03-25', 1),
(10, 3, 'Demo1', 'Assessing Discovery Skill Levels – How Does Your Team Rate?', 'Many sales and presales practitioners say they are skilled at doing Discovery – but are they?  Here’s a simple method to assess, based on five levels of increasing proficiency:\r\n\r\nLevel 1: Uncovers statements of pain.\r\nLevel 2: Uncovers pain and explores more deeply.\r\nLevel 3: Uncovers pain, explores deeply, broadens the pain and investigates the impact.\r\nLevel 4: Uncovers pain, explores and broadens, investigates impact and quantifies.\r\nLevel 5: Uncovers pain, explores and broadens, investigates impact, quantifies and reengineers vision.\r\nLet’s explore each of these briefly…\r\n\r\nLevel 1\r\n\r\nWhen doing Discovery, if your presales or salespeople simply uncover “Pain” and go no further, then they are novices.\r\n\r\nFor example, the prospect offers, “Our current process is manual…”  Many vendors leap to propose a solution at this point – let’s call this Level 1 Discovery.\r\n\r\nBasic – and clearly insufficient…!\r\n\r\nLevel 2\r\n\r\nVendor representatives with slightly deeper Discovery skills ask follow-up questions to explore the pain more deeply.\r\n\r\nExample:\r\n\r\nThe prospect says, “Our current process is manual…”\r\nVendor replies, “Sorry to hear this – why is this an issue?”\r\nProspect responds, “Well, it takes too long to get the reports we need and there are often errors in the reports…”\r\nThis shows a step up in skills attainment – Level 2.  The pain is a bit deeper and the impact is beginning to be understood, but we can go (much) further…\r\n\r\nLevel 3\r\n\r\nPractitioners at Level 3 seek to understand more about the impact of the pain on the immediate and extended prospect organization – let’s continue the conversation:\r\n\r\nThe prospect says, “Our current process is manual…”\r\nVendor replies, “Sorry to hear this – why is this an issue?”\r\nProspect responds, “Well, it takes too long to get the reports we need and there are often errors in the reports, because of the manual process…”\r\nVendor asks, “What’s in these reports and how are they used?”\r\nProspect answers, “Well, the reports give us visibility into where we have problems to address. When the reports are late – which is nearly always – the delay results in unhappy internal customers…”\r\nThis conversation continues, exploring the content of the reports, how they are consumed, the nature of the problems, how the user population is impacted, and how addressing the process impacts the prospect’s goals and objectives.\r\n\r\nThis discussion broadens and deepens the exploration of the pain and seeks to look beyond the workflow.  Who else is impacted and in which departments?  Is this a local pain or something that affects the organization more extensively?\r\n\r\nLevel 3 is all about understanding impact.\r\n\r\nWhere can we go from here?  To uncover value!\r\n\r\nLevel 4\r\n\r\nAt Level 4, presales and salespeople quantify the pain, using the prospect’s own numbers.\r\n\r\nFor example:\r\n\r\nVendor says, “You noted that it takes too long to get these reports done – how long is it taking today?”\r\nProspect responds, “Oh, it takes about a week – 5 working days…”\r\nVendor asks, “How long would you like it to take – or need it to take – to feel you’ve really addressed this problem?”\r\nProspect answers, “Well, if we could get these done accurately in a half a day, that would be terrific…!”\r\nNow we have a tangible Delta of value – the difference between the prospect’s current state and their desired future state – of 4.5 days.  Our vendor should further explore this by asking how often the reports are generated, how often errors occur (and what happens when they do) and how much time is consumed by the team creating these reports.\r\n\r\nThe answers to these questions might result in the following exchange:\r\n\r\nVendor summarizes, “So, if I understand correctly, generating these reports is currently consuming nearly 1.5 FTEs annually, and taking 4.5 days longer than you want – in addition it is causing below-desired internal NPS numbers for you and your team.”\r\nProspect responds, “That’s correct – and I hadn’t really internalized the full cost of this problem until now…!”\r\nLevel 4 skills are all about uncovering value.\r\n\r\nCan we do better than this?  Absolutely…!\r\n\r\nLevel 5\r\n\r\nPractitioners at Level 5 reengineer the prospect’ vision of a solution.\r\n\r\nIn our conversation from above, our vendor asks the prospect to describe or share an example of the report currently used.  After viewing the report, the vendor realizes that it is lacking certain capabilities or possibilities, and explores these with the prospect:\r\n\r\nVendor notes, “It looks like you have a good basic view of the what’s working and what’s not in these reports, but they are static, if I understand correctly… Would it be useful or interesting to be able to drill down to find the root causes, right from the report?”\r\nProspect responds, “Wow, yes that would be terrific – that would save a lot of time…!” [How time savings might also be explored here…]\r\nOur vendor has now proposed an improved version of the report – and the prospect has agreed this would be better.  This is one example of Vision Reengineering – going beyond the prospect’s initial vision of a solution.\r\n\r\nThe ability to execute this kind of Vision Reengineering is a Level 5 skill.\r\n\r\nLevel 5 with a Differentiating Twist\r\n\r\nVision Reengineering is also an opportunity to outflank competition.\r\n\r\nIn our example conversation, our vendor realizes that he/she has a relevant capability that is not matched by the competition and introduces it as follows:\r\n\r\nVendor notes, “Many of our other customers, in similar situations to what you’ve described so far, found it very useful to have these reports sent automatically to the consumers via an email link – but only when there was a problem to be addressed. Our customers report that they didn’t waste time accessing reports where there were no issues – in some cases, they reported saving several hours every week.  Is this a capability you’d also like to have?”\r\nProspect answers, “Wow – yes, that would be really helpful for us as well…!”\r\nVendor offers, “Great – let’s plan to include it in the demo…”\r\nHere, our vendor rep has introduced the alert-based capability – a key differentiator – and turned it into a Specific Capability that the prospect wants and expects in a solution.\r\n\r\nThe folks at Level 5 not only reengineer vision but also competitively outflank.\r\n\r\n5 Skill Levels for Doing Discovery\r\n\r\nRecapping:\r\n\r\nLevel 1: Uncovers statements of pain.\r\nLevel 2: Uncovers pain and explores more deeply.\r\nLevel 3: Uncover pain, explores deeply, broadens the pain and investigates the impact.\r\nLevel 4: Uncover pain, explores and broadens, investigates impact and quantifies.\r\nLevel 5: Uncover pain, explores and broadens, investigates impact, quantifies and reengineers vision.\r\nThese 5 levels represent a simple method of assessing the state of your team’s Discovery skills.  Note that there are many other skills not addressed in this simple ranking system, including managing timing and flow, probing methods, workflow analysis, going beyond the workflow, dealing with “burn victims”, starting Discovery, “Why” questions, uniqueness, and many more.  (Contact us if you would like to discuss.)\r\n\r\nWhat do you use to assess your team’s Discovery skills?\r\n\r\n \r\n\r\nCopyright © 2021 The Second Derivative – All Rights Reserved.', 'Doing-Discovery-300x300.png', '2021-03-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `cid` int(11) NOT NULL,
  `ctitle` text NOT NULL,
  `cstatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`cid`, `ctitle`, `cstatus`) VALUES
(1, 'Demo', 1),
(2, 'Demo1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `urole` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `uemail` varchar(255) NOT NULL,
  `upassword` varchar(255) NOT NULL,
  `ucreated` date NOT NULL DEFAULT current_timestamp(),
  `ustatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `urole`, `uname`, `uemail`, `upassword`, `ucreated`, `ustatus`) VALUES
(1, 'guest', 'Mark Charles', 'demo1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-03-24', 1),
(2, 'author', 'Sumer Singh Harawat', 'demo@gmail.com', '4297f44b13955235245b2497399d7a93', '2021-03-24', 1),
(3, 'author', 'rahul', 'demo2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-03-25', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
