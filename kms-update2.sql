-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2015 at 05:09 
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kms`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita_upload`
--

CREATE TABLE IF NOT EXISTS `berita_upload` (
  `id` int(10) NOT NULL,
  `judul` char(25) NOT NULL,
  `filetype` char(50) NOT NULL,
  `filedata` longblob NOT NULL,
  `filename` varchar(100) NOT NULL,
  `filesize` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_upload`
--

INSERT INTO `berita_upload` (`id`, `judul`, `filetype`, `filedata`, `filename`, `filesize`) VALUES
(1, 'lemari punya nyonya', 'image/png', 0x89504e470d0a1a0a0000000d49484452000002800000019008060000003ef3d12500000006624b474400d5001c001cb96b4d0d000000097048597300000b1300000b1301009a9c180000000774494d4507df070c170501c45316d40000001974455874436f6d6d656e74004372656174656420776974682047494d5057810e1700001a304944415478daedddeb761bc7a1a6e1afaac1a30e9664d99eecc95e73ff173457305999bd7d926d49a444a0abe607aa2998b12579e28404f03c6b714989281b28b48197d5dd55e57ffff5af3d00001c8d6a080000042000000210000001080080000400400002002000010010800000084000000420000002100000010800800004004000020008400000042000000210000001080080000400400002002000010010800000084000000420000002100000010800800004004000020008400000042000000210000001080080000400400002002000010010800000084000000420000002100000010807aef79edebb81c03108084038c60f6170dc0102108e4829c520e0b8033ecbca10800f60700c820004f654ef3d9b24739279fcbef59e76f703db50f1a963e9ceffae496a295925994ac9343e40c41f0840e09eb52437bde7baf75cf59eebd6723362b0efc49f6b3ff89c6369f798994ac969928b5a73594a2e4a491d21080840e01ecd49def59e9f5bcb4fe3ebed88c0d6fb36fe4a498d59407e5f1f01d8c60f0e75c4dfa35af3acf73cab35a5d69c08401080c0fd6b3b01f85ff39c6fe739af5acbbbd6328fe85b4ee309403e16809b9d009c929cd79ae7b5e6dd34a524392f258f0c150840e0010460ef79d77b7e6a2dff3dcff93f9b4dbe9de75cf59ecd98015c2d01e8da2d7e2f00c7f5a39b1180ab5272594abe9ea6f42417a5e48b5ad37a4f1c472000817b0ec024ef7bcfebd6f2fd3ce7ef9b4dfe3ecff9a5b56cb2bdf66f953875c747cd49d6cb4d44e398795a6b36bde7a2947c596bdeffc6cd45800004ee2900d7e306909f5bcbf7e354f0d59dc57aa7b811848f1f47f39dffefaaf79c969297ade5aaf7ac05200840e06158aedd5aee047e333eacef9a7fe3031e3ee66a1c4fd7bde766cc0eda0304f697490038c0085c6602d786833fd17a1c574dfc8100041e6604f66c6f0a813fcb7257b0a30a0420f0002d8b3d4feed0e44f345943120420f0f0e3cf9dbefca90128024100020f33fe6e0330dbf5dbe0cfb21a3f54d49d630d1080c04389c0f1413dc5adfefc49f1378ea7691c5fe20ff6ffbf69e09063f0337e0a2cf9f8ac4edfb3e7fc5b8ffff6c698f1f5393f1def8ec9218f4bdbf9f59f3996000108ec8129c96929392d2567e3f7cb355e7723615fc3b72599c79238efc71a76cb3a761f7b63bc1d97527292fc6a5cf67d4c76c7e5a6f7bc4f6ec7c5fa90200081237803b82c254f6acd9352f2a8d69c8dd3c725bf9e21dab7d0a93b8ffd7def793b1632fea5b5ed82d91f5922e764ec7dfbb4d63cae358f46082e33826d0f23707736b367bb10f8fbdef3b6b5bc1edb07360108021038823780113a2f6acd57d394e7b5e651ad39dd099d79099e3d5853b08c485b6e82597646b96a2d3fb696ef4b494b7233cfb9fec83fe724c9e35af3e534e565ad79516b2e6bcd6a8ccb3226fb362ed34e18df2479db5a5eb596efe63973ef79574ade5b3b12042070f801f86884ce5fa6297f59adf2c532db554ae63123348f05801f7ce824a9a56c6f582825adf7dc2479dd5a2ee739d96c72dd5a5e9792f23bcfa9643b03f8b894bcac357f5dadf2cd34e5c908e3655c36f9b030f23e8ccbb22cd0322eef7bcfcfbde77cb349cb76abb75f7a4f04200840e0b09d647b0af879adf9cb34e57f4d535e4c532ec68cd19cedd65f9b3d7a4ed308b8553e9cfe7dd55aea889c1f5bcb49fbf849ed9311c62f4618ffe76a95e7e3f478cd765671bd67a74b57e3794d635cae7bcf8ff39cf49eabdef3c3b8d6111080c0819b4ac9f9b8d6ede59801fc6a9af2e84ee8ac93fd98191ae177ba1380ef7acff93ce75deff9beb55cdeb9c6f11ffe1123222f4bc917e3d4f85fa6295f4d53ce77c6e5f646923d1997933b61fcb6f79c9592b7bde7bbd6723e6e0002042070e0ea88a5e5469067b5e68bfae11ee0d3f1e7fbfcfc1e97924d721b7fa79fb143ca74675c9e4f531e1fd8b87c514ad6bde749adb7e362615838aef77fe0482d77cbaec6757f17073a0374b12ce7b2ccfe7de2792e0b699f1cc9b8ac6cef06021038b23781dd3b670f3474961d2c3e770bb3bb5bea1dea9ecad3ce6b5f9dfe0501081c8fdd654cfa81de017a77cdbefe19dfff7b7fd76b0f0840e020e26859efef5017019eb35db2a5f5fed98b5ab79dbf73c8e372bbcea3ff14400002c7137f3ddb75fee6de3fba3bc63edb8c3b763f377676a378931cf4b82caffd21cf74020210f848ecac0ff4396ec62cdeedecdfa7826efcf96d041e6800ae630610042070b401d80f3c0296d3b97f6496eb765cfec069e37d8d7fb37f2000010010800000084000000420000002100000010800800004004000020020000100108000000840000004200000021000400002002000010010800000084000000420000002100000010800800004004000020020000100108000000840000004200000021000400002002000010010800000084000000420000002100000010800800004004000020020000100108000000840000004200080000400400002002000010010800000084000000420000002100000010800800004004000020020000100108000000840e0c1e9bda7f76e208c09200081638c1e8c03200001b1637c00042000000210d85ba51483607c807bb43204c0438a9c3f7afaf321c5d23ff3d8451f200081a333f79e4d9275efd98cdfb724adf7ec66552d2535c99464554a4e7acfaa94acee29a2fa78ac9bdeb31ebfce3b8ffd36f0761efb6a79ece3f793f8030420708c3649ae5bcbdbdef3b6f7bc6b2d3723a87a929eed352b75c4d37929b92c258f6acde588abe91e1e774b72d37bae7acfdbd672d57bde8d886de3cfcbf85a9592d324e7b5e6512979544a2e6abd97c70d084080fb0fc0117e3fb49657f39c9f474cadc70c5beec4df9352f27c9a3227996acdd93dcda2f524ef7bcf2fade5c7f1d85fdf89c0e5cdf66444eb17b5e6f93425b5e6a4f77b7bec800004b857eb246f5acb0ff39cff3bcff96e9ef34b6b793f22b0677baaf474cc9cbda83537d99e0abe2ce536b4feddda08c09f5bcb7fcf73fe6bb3c98f6326f3a6f7ccbda78cf83b2b254f6bcd57d39496e42cc9a3ea5e3c400002c71a806306f0c7d6f2f7cd267f9fe7fc30cfb7b3802d3bb37fb5e66a9a329592c72306ef6be5bcdd19c0efe6397f1b01fbbab5db59c09a0fb37f5f4e53d663d6ef8b5ab3b6e61f2000816335f79eeb3193f6dd3ce76f9b4dbe9de7bced3def47009e24b9a835cfc7acd9e352f2d534e526e3868b7b3895da7acf4d9237bddfce5efe6db3c9abd672dd5ad6d99eba3e1b3397d7bde724c98b69caf59821041080c0710660b633696f5acbabd6f27d6bf9aefdfac4ee4d929bd6b2ee3d8f4ac9eb69ca756bb7378adc879eedf58bd7ade575ef7935cff976cc5cee3eb7ab71a3482d25cf5acb9b717a7bf6d203f7c0c527c083d04648bd1f3381afdbef5fd577b573a7f03adb3b88ef3500b3bd86f1ddb8f6efea23b37aaf5bcbf5789ebb3789000840e0e8f41181eb7107edbb4f9c1a7d3f4ebd6e7abff7bd73fb88b99bf1b83e66796ecb758d4e0003021038fa009cc7d7a766c6d63b3368fd813cf6cd08bb8fb9fb1c0520200081a38fc0fe9951d4effcfa101e7bfec063ef117f800004d86e97f6996f4c351fb6567b286fa69ffb7896e768f967400002471f7fb7fbfb66bbe4cbc79c8efd7fa707f04676bb37f1785c1fb33cb7d5d8ba4e0402021038ea37a369c4df79adb9fcc80e1935c9f9d85963554a6a29f7165225db99bfd5783ce79f9805bcac35e7b5e6643c5f6fc28000048efacd6859e8f9f1d825e3ec77bef759ad795a6b2ec7d670f73993b6cc5c9e8e9d3e9ed69a67bf13af6749be18cfef6244a03761e03e58081a7810a6317bf6746c97f6a6f74c49deb6969b6c975a5995928b11875f4d539ed59a47a5e4a49494723f0958c6bfff512979361ed74defb91cbb7e6c7a4f2925a7d9eefbfb729af2e534e5e978be537112181080c011bf195dd69a67d3946fc6da7e4f4644adc74e1fcb69d627630bb897d39427b5e6ec1e4fa52edbbc3d1971b76cf5f67a67b1e792ed5ec017a5e479adf9669af26c9a7259ab3761400002c76b99457b596be669ca452979b9b35d5acff654eb6e487d354d793a02f03e9d8d53bf5f4f534a9227b5de86eb9c0fa78997507c516b5eeecc5e020840e068df8c1ed79a4db6337d4f5bcbbb3183b604601d7fb69c4e7d5aebf65ac1073003f8c5b8eeefbc94bc18a7ad9785aa77ef703e1f11f8b4d63c3603080840e0a8df8c4ac96592326eee785eebeda9df65579032be96083c2b25e70fe814f0499227a5e4669ab65bd4e5c362cfcbba7f27e334f6d998c95c990104042070cc6f4675dcd53b8f99b325fc7677cc283b5fcb322af77d17f0c978ece7d3947927fcee3eee2504ebce63771730200081a3f5ab5d34f66856ac8c6568a63d7cec800004f8b7eabdff2aa28c87f100fe8d3f741b02e03e6307e30308400000042070689ce2343ec0fd720d2020728c077064cc0002000840000004200000021000000108008000040040000200200001001080000008400000042000000210000001080080000400108000000840000004200000021000000108008000040040000200200001001080000008400000042000000210000001080080000400108000000840000004200000021000000108008000040040000200200001001080000008400000042000000210000001080020000100108000000840000004200000021000000108008000040040000200200001001080000008400000042000000210f86d65bc114ce3eb104da5642a25653cdf94f28941f9f0bdcbdf3dc871195f751917400002c71780ab030d9dd54eec943f302ecbdf591de86bbf2a45008200048e36fe4ac9aa94830d9d93318b574bf9acd859c6a58ebf7772c061bc5ac646048200048e2802ef9cee3cd437badd99aecf09c072e7ef1da2ddd3e2a5c83f1080c0d1e8bdffe6ef0fea398eaf7ff7dff5da030210789061d4926c7acfa6f7ac0ff479aec7f39b7b4ffb8ca05bc6655ec6e540e368bdf3da7fceb80087636508e0b803704e7293e4baf7bc692d8f7ee3aed74def7b110725bf7d23cbdbde73dd7bdef79e4d92f689a06be3fbde8fbff7b6f75cfec6f7edf3b8cce3f5beee3d37e338108020008123308f287adb5a5eb596ef5b4b925cd69a3a42e8660f43e724dbebdbda88b81fe6393fb69637bde75def993f352e49def59e37bde7c7d6f2dd3ca725391b374bcc63b674dfc6e534db1b5b5a92abf17abf6a2d6f5bcbfb31430a0840e0d00330db99bf9f5acbb7f39cb35272556bce97d049b219a1b32f96e56c56c96d002ecf6f899df547c2ad677bca7889e26fe739ab24af5bbb0dc0654ce63d7aad973199c6b8bcebfdf6f9fd34660267ff498000040edf6684ce8fade56c9e3327f9a1949c8ebb43db88c0b647335d75676dbb9eed756e6f5acbf7f39c1fe639579f71ade33ac9d598393c4d72d37b1ed79a93f1ef388471b9e93daf7bcfb76376f46d6b7b15fa800004fe7f03702774fa88c18b3ba1b37cedc35da265ccd0d59dd0d9643bcbf94b6b7935cf79fd993380af5bcbc908bd5f7acfc598413b94715927b96e2d3f8f1f00aec6758f8000040edcbaf75c8debfe9653a5a723169618dab765504a7ebdd65f1bcff3baf75c8d1b3a3e7557ef7a5cffd7c7a9d1576331e8431b979b9d71b91a610c0840e0c0cdd9ce00ae5bcbdb6caf13bbbb23c4be2641d979fccb922eb7cb9e7ce2ef6eb29d1d5b9792b7c93fec94b1ef63b23b2ecb78ac5d03080210380ecb69ccdb991f3340b7e37293ed0c9971010e9185a001000420000002100000010800800004004000020020000100b857d601842356924ccbd7ce5eb12963c9e09df5efac84b7dfaff387fff1e1b55df6349ec722d0b3d7190420701c6f0067a5e4627c9ded6c7956f261bbb366a8f6def29a969dd774dd7bde8fede0aec7efd7860a042070e06f00a5e4b2943c9ba63cab354f4608ae4a49c9879d427aef6686f658495246d8d711809b117dafc71ed0659e3327f6030601081cc31bc0a35af3a2d6fc8f69cacb69cae352727a27006701b8f70138dd09c09bdef3a6f77c3fcfa923fcae67bb018300040eff0da0943c2a255fd69aff98a6fcc76a9567b5e662270037bd6713d786ed7b00aec6ebbd04e0f598f93b1df1f7a6b5fc548a7d8f410002876e4a72516b9e4d53be59adf29fab555ed69acb5a53b29df95b8f0894057b1e80a5e424db99c09ee4aab57cdf5ae6243ff79e6f5bcb640610042070046f00e3c68f27a5e445adf97a9af2cd34e5ac7cb86f7489c06e66687f037027fe16ef6b4d9de7fcd25a9e8ce360558ac10201081c7c182439c9f64ee0cb52f2b4d65fc55ff261799888838372365eefcbe5eeefdc592e063868168286237f0398c64d1fe72302391e97e3753f2de5f626114000024760caf654c0c908018ec7e958f771358e0340000247e036f7ccfe1cf787c0087ff90f02103826635b308e4f1baf3f20008163e9be110073b64bbdd805e2b8ac7bcf66ec03dc62ad471080c051683be1b7ec09cbf1b8ddff7784a05960381e96818123d6936c92bcef3d57633788cbdf580f6e6d21e8bd56b2bdc967d766bcde572302edf6020210381273efb77bc2be6a2ddfcd737ab6cb839452d2c69f8b83fd0fc055b677fdd652d247f07f3fcf79d55ade8cd77936030c02103882004c7235f684fd769e73524adef69ef39dbd80d7e31a3169b0df0138653b0bb8ec05fcaef7fc385ef79fc64ca08de04000024760d37bae5acb8ff39cb352b2e93d3feeec06b29c223633b4ffa6b1dedf7222f87def79dd5abe1bafff556bd9789d41000247108049def69e1f5a4bdb6cf2a6d65c8c6b004b76ee1216060711807504601ff17fdd7b7e6e2daf5acbdb71aa1f1080c0815b8f19c0643b23f4536b3959f6fe1d2c0f72184a7ebdecc33c5eff77e37ac0abd62c03040210380673b64b81ac5bcbdb6c6789a6fc7a47887ee757f633fef21bafeb9cedecee26b95d0f101080c0816bf970a3c7b60a641ec031b0103400800004004000020020000100108000000840000004200000f7ca3a8070c4ca78135816809e9294b10ddc2eab031ec66b7df735ed63f1e7dd05a1bdd6200081237803382f2517a5e4a2d69c97929324b5940fe1d7fb36160cd75ec75f49929db86fbd679de45defb96e2dd7e3f76bc305021038f037805272596b9e8dafa7b5e6a294db37869e0fbb85b0dfeaf85a027093ed3680bfb4969f4a49692d1bfb018300048ee30de05129f9b2d67c334df96a9af2a4d69c264929e9e3b4a0003c8c005c657b8a3fbde726c9ebd6f2dd3c67ca763bc02bc3040210388237805272594a5ed49aff58adf23fa729cfc7a9e052caed7561f3380dcc7e2ad95ee7b95cefd97bcfbbdef3aab59c9492f598095c8d3804042070e06f0097b5e6d934e59b69ca5f57abbc9ca65c96929aedcd01ebdeb311807b1f80ab5272326ef66949ae7acfa379ce26c9cfade5b2b5ace6d9608100040edd544a4e4bc99352f2bcd67c3d42f0b47cb867b4b93bf43002301f6eee49929bde5347fc3d19c7c1548ac1020108ecbb4fddbd5b929c24391da7829fd4faabf8cb8886534379704ec7eb7d39e2ef24ffb854cc1f399680fd62216838c4e8db59df6df391ef6d3b6f042742eff82270bceef5cef1f05b36e3789ac7f125064100020f29fec607f99c64f3890bfa3777eef27502f0b8949df0db7ce6f1328fef3723080210786011d8b2bd73f75397f46f7abffdbe4def967b39326d27eae671b3cfc72cdfd7c41f0840e06147e0273fd0f3611b30bb401c977572bbcccf722c7cf478117f200081876bd9faab7ec65d9db7bb7d7cc60c108765d37bda1f88ba3ab69273a9000840e001c6df7253c7c927bef7742c0e5c774290e3b184dfb24bc8e9277e6038c9879b4644200840e001c5dff2417e514a1e8f653e7eefc3fcf1f8be650d381feac777bc2c6b415e9492c71ff9a1e1721c4fcbf1b21281b0d7ac030807f613ddc958d3ef8b5af3b2d6dc4c537e692d57e3868f5a4acec6e2cf2fa729cfa7298f6acdd9ce72201ccff172564a1ed59ae7d39497ada52779dd7bde8fd3c3d3389e9e8ee3e98bf143c589e3050420f0b03ed09fd49a97d394ebdeb32a256f5acbfb6c2fe22fe37b2e4bc997d394af6bcdb331b33319c2a33225b92825cf6acdd7b566bd5ae5b2945c8d00ecd9ce109e25793c768a79394d79e207061080c0030ac052723e3ed0bf99a694244f6acd756b59ef04e0c9f8bea7b5e6ab69ca8b31abb3b215d8717d008c1f045ed49af7ab5556634bc077bd67bd138027492e6abddd2ef059ad392fe5b36e32020420f0af0ec024e7e3f46f1fbfffb2b5bcdf59c0b7643bf3b37baaf859adb9acd50ce09199925cd69ae7e307834763f66f3d8e97e50691291f4e153f1ba781cfcd008200041ece07fa128027e3a2fe9b69fa87459eeb4e045e94928b31033899d139aee3a5945c26c934dd1e37eb9d1f16768f97d5d82a703956ce5d3200021078186a727b47ef45efd9d4fa9bebbcedae13388d378269dcd9c9917d008cd7fd729ab6e1374efdde3d5eea385e9663658a65244000020f4219d76b9d8c0f76f8e80f0c6356cfb1020210d8337decde51fec40ff1beb3234811070777acfcab8e17c70aecd10f8086000eefc37d1ffeb9383e000108fc93fe55b32f66751c1f8e0f383c4e01830f761fea8e15c70b1c19338000000210000001080080000400400002002000010010800000084000000420000002100000010800800004004000020020000100042000000210000001080080000400400002002000010010800000084000000420000002100000010800800004004000020020000100042000000210000001080080000400400002002000010010800000084000000420000002100000010800800004004000020008400000042000000210000001080080000400400002002000010010800000084000000420000002100000010800800004004000020008400000042000000210000001080080000400400002002000010010800000084000000420000002100000010800800004001080000008400000042000000210000001080080000400400002002000010010800000084000000420000002100000010800800004001080000008400000042000000210000001080080000400400002002000010010800000084000000420000002100000010800800004001080000008400000042000000210000001080080000400400002002000010010800000084000000420000002100000010800200001001080000008400000042000007be6ff01d27f27e11ad6f4110000000049454e44ae426082, 'lemari nyonya.png', 6856);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_upload`
--

CREATE TABLE IF NOT EXISTS `dokumen_upload` (
  `id` int(10) NOT NULL,
  `judul` char(25) NOT NULL,
  `filetype` char(50) NOT NULL,
  `filedata` longblob NOT NULL,
  `filename` varchar(100) NOT NULL,
  `filesize` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen_upload`
--

INSERT INTO `dokumen_upload` (`id`, `judul`, `filetype`, `filedata`, `filename`, `filesize`) VALUES
(1, '', 'text/x-markdown', 0x23206b6d730a0a4b6e6f776c65646765204d616e616a656d656e2053697374656d0a, 'README.md', 34),
(2, '', 'image/png', 0x89504e470d0a1a0a0000000d49484452000002800000019008060000003ef3d12500000006624b474400d5001c001cb96b4d0d000000097048597300000b1300000b1301009a9c180000000774494d4507df070c170501c45316d40000001974455874436f6d6d656e74004372656174656420776974682047494d5057810e1700001a304944415478daedddeb761bc7a1a6e1afaac1a30e9664d99eecc95e73ff173457305999bd7d926d49a444a0abe607aa2998b12579e28404f03c6b714989281b28b48197d5dd55e57ffff5af3d00001c8d6a080000042000000210000001080080000400400002002000010010800000084000000420000002100000010800800004004000020008400000042000000210000001080080000400400002002000010010800000084000000420000002100000010800800004004000020008400000042000000210000001080080000400400002002000010010800000084000000420000002100000010807aef79edebb81c03108084038c60f6170dc0102108e4829c520e0b8033ecbca10800f60700c820004f654ef3d9b24739279fcbef59e76f703db50f1a963e9ceffae496a295925994ac9343e40c41f0840e09eb52437bde7baf75cf59eebd6723362b0efc49f6b3ff89c6369f798994ac969928b5a73594a2e4a491d21080840e01ecd49def59e9f5bcb4fe3ebed88c0d6fb36fe4a498d59407e5f1f01d8c60f0e75c4dfa35af3acf73cab35a5d69c08401080c0fd6b3b01f85ff39c6fe739af5acbbbd6328fe85b4ee309403e16809b9d009c929cd79ae7b5e6dd34a524392f258f0c150840e0010460ef79d77b7e6a2dff3dcff93f9b4dbe9de75cf59ecd98015c2d01e8da2d7e2f00c7f5a39b1180ab5272594abe9ea6f42417a5e48b5ad37a4f1c472000817b0ec024ef7bcfebd6f2fd3ce7ef9b4dfe3ecff9a5b56cb2bdf66f953875c747cd49d6cb4d44e398795a6b36bde7a2947c596bdeffc6cd45800004ee2900d7e306909f5bcbf7e354f0d59dc57aa7b811848f1f47f39dffefaaf79c969297ade5aaf7ac05200840e06158aedd5aee047e333eacef9a7fe3031e3ee66a1c4fd7bde766cc0eda0304f697490038c0085c6602d786833fd17a1c574dfc8100041e6604f66c6f0a813fcb7257b0a30a0420f0002d8b3d4feed0e44f345943120420f0f0e3cf9dbefca90128024100020f33fe6e0330dbf5dbe0cfb21a3f54d49d630d1080c04389c0f1413dc5adfefc49f1378ea7691c5fe20ff6ffbf69e09063f0337e0a2cf9f8ac4edfb3e7fc5b8ffff6c698f1f5393f1def8ec9218f4bdbf9f59f3996000108ec8129c96929392d2567e3f7cb355e7723615fc3b72599c79238efc71a76cb3a761f7b63bc1d97527292fc6a5cf67d4c76c7e5a6f7bc4f6ec7c5fa90200081237803b82c254f6acd9352f2a8d69c8dd3c725bf9e21dab7d0a93b8ffd7def793b1632fea5b5ed82d91f5922e764ec7dfbb4d63cae358f46082e33826d0f23707736b367bb10f8fbdef3b6b5bc1edb07360108021038823780113a2f6acd57d394e7b5e651ad39dd099d79099e3d5853b08c485b6e82597646b96a2d3fb696ef4b494b7233cfb9fec83fe724c9e35af3e534e565ad79516b2e6bcd6a8ccb3226fb362ed34e18df2479db5a5eb596efe63973ef79574ade5b3b12042070f801f86884ce5fa6297f59adf2c532db554ae63123348f05801f7ce824a9a56c6f582825adf7dc2479dd5a2ee739d96c72dd5a5e9792f23bcfa9643b03f8b894bcac357f5dadf2cd34e5c908e3655c36f9b030f23e8ccbb22cd0322eef7bcfcfbde77cb349cb76abb75f7a4f04200840e0b09d647b0af879adf9cb34e57f4d535e4c532ec68cd19cedd65f9b3d7a4ed308b8553e9cfe7dd55aea889c1f5bcb49fbf849ed9311c62f4618ffe76a95e7e3f478cd765671bd67a74b57e3794d635cae7bcf8ff39cf49eabdef3c3b8d6111080c0819b4ac9f9b8d6ede59801fc6a9af2e84ee8ac93fd98191ae177ba1380ef7acff93ce75deff9beb55cdeb9c6f11ffe1123222f4bc917e3d4f85fa6295f4d53ce77c6e5f646923d1997933b61fcb6f79c9592b7bde7bbd6723e6e0002042070e0ea88a5e5469067b5e68bfae11ee0d3f1e7fbfcfc1e97924d721b7fa79fb143ca74675c9e4f531e1fd8b87c514ad6bde749adb7e362615838aef77fe0482d77cbaec6757f17073a0374b12ce7b2ccfe7de2792e0b699f1cc9b8ac6cef06021038b23781dd3b670f3474961d2c3e770bb3bb5bea1dea9ecad3ce6b5f9dfe0501081c8fdd654cfa81de017a77cdbefe19dfff7b7fd76b0f0840e020e26859efef5017019eb35db2a5f5fed98b5ab79dbf73c8e372bbcea3ff14400002c7137f3ddb75fee6de3fba3bc63edb8c3b763f377676a378931cf4b82caffd21cf74020210f848ecac0ff4396ec62cdeedecdfa7826efcf96d041e6800ae630610042070b401d80f3c0296d3b97f6496eb765cfec069e37d8d7fb37f2000010010800000084000000420000002100000010800800004004000020020000100108000000840000004200000021000400002002000010010800000084000000420000002100000010800800004004000020020000100108000000840000004200000021000400002002000010010800000084000000420000002100000010800800004004000020020000100108000000840000004200080000400400002002000010010800000084000000420000002100000010800800004004000020020000100108000000840e0c1e9bda7f76e208c09200081638c1e8c03200001b1637c00042000000210d85ba51483607c807bb43204c0438a9c3f7afaf321c5d23ff3d8451f200081a333f79e4d9275efd98cdfb724adf7ec66552d2535c99464554a4e7acfaa94acee29a2fa78ac9bdeb31ebfce3b8ffd36f0761efb6a79ece3f793f8030420708c3649ae5bcbdbdef3b6f7bc6b2d3723a87a929eed352b75c4d37929b92c258f6acde588abe91e1e774b72d37bae7acfdbd672d57bde8d886de3cfcbf85a9592d324e7b5e6512979544a2e6abd97c70d084080fb0fc0117e3fb49657f39c9f474cadc70c5beec4df9352f27c9a3227996acdd93dcda2f524ef7bcf2fade5c7f1d85fdf89c0e5cdf66444eb17b5e6f93425b5e6a4f77b7bec800004b857eb246f5acb0ff39cff3bcff96e9ef34b6b793f22b0677baaf474cc9cbda83537d99e0abe2ce536b4feddda08c09f5bcb7fcf73fe6bb3c98f6326f3a6f7ccbda78cf83b2b254f6bcd57d39496e42cc9a3ea5e3c400002c71a806306f0c7d6f2f7cd267f9fe7fc30cfb7b3802d3bb37fb5e66a9a329592c72306ef6be5bcdd19c0efe6397f1b01fbbab5db59c09a0fb37f5f4e53d663d6ef8b5ab3b6e61f2000816335f79eeb3193f6dd3ce76f9b4dbe9de7bced3def47009e24b9a835cfc7acd9e352f2d534e526e3868b7b3895da7acf4d9237bddfce5efe6db3c9abd672dd5ad6d99eba3e1b3397d7bde724c98b69caf59821041080c0710660b633696f5acbabd6f27d6bf9aefdfac4ee4d929bd6b2ee3d8f4ac9eb69ca756bb7378adc879eedf58bd7ade575ef7935cff976cc5cee3eb7ab71a3482d25cf5acb9b717a7bf6d203f7c0c527c083d04648bd1f3381afdbef5fd577b573a7f03adb3b88ef3500b3bd86f1ddb8f6efea23b37aaf5bcbf5789ebb3789000840e0e8f41181eb7107edbb4f9c1a7d3f4ebd6e7abff7bd73fb88b99bf1b83e66796ecb758d4e0003021038fa009cc7d7a766c6d63b3368fd813cf6cd08bb8fb9fb1c0520200081a38fc0fe9951d4effcfa101e7bfec063ef117f800004d86e97f6996f4c351fb6567b286fa69ffb7896e768f967400002471f7fb7fbfb66bbe4cbc79c8efd7fa707f04676bb37f1785c1fb33cb7d5d8ba4e0402021038ea37a369c4df79adb9fcc80e1935c9f9d85963554a6a29f7165225db99bfd5783ce79f9805bcac35e7b5e6643c5f6fc28000048efacd6859e8f9f1d825e3ec77bef759ad795a6b2ec7d670f73993b6cc5c9e8e9d3e9ed69a67bf13af6749be18cfef6244a03761e03e58081a7810a6317bf6746c97f6a6f74c49deb6969b6c975a5995928b11875f4d539ed59a47a5e4a49494723f0958c6bfff512979361ed74defb91cbb7e6c7a4f2925a7d9eefbfb729af2e534e5e978be537112181080c011bf195dd69a67d3946fc6da7e4f4644adc74e1fcb69d627630bb897d39427b5e6ec1e4fa52edbbc3d1971b76cf5f67a67b1e792ed5ec017a5e479adf9669af26c9a7259ab3761400002c76b99457b596be669ca452979b9b35d5acff654eb6e487d354d793a02f03e9d8d53bf5f4f534a9227b5de86eb9c0fa78997507c516b5eeecc5e020840e068df8c1ed79a4db6337d4f5bcbbb3183b604601d7fb69c4e7d5aebf65ac1073003f8c5b8eeefbc94bc18a7ad9785aa77ef703e1f11f8b4d63c3603080840e0a8df8c4ac96592326eee785eebeda9df65579032be96083c2b25e70fe814f0499227a5e4669ab65bd4e5c362cfcbba7f27e334f6d998c95c990104042070cc6f4675dcd53b8f99b325fc7677cc283b5fcb322af77d17f0c978ece7d3947927fcee3eee2504ebce63771730200081a3f5ab5d34f66856ac8c6568a63d7cec800004f8b7eabdff2aa28c87f100fe8d3f741b02e03e6307e30308400000042070689ce2343ec0fd720d2020728c077064cc0002000840000004200000021000000108008000040040000200200001001080000008400000042000000210000001080080000400108000000840000004200000021000000108008000040040000200200001001080000008400000042000000210000001080080000400108000000840000004200000021000000108008000040040000200200001001080000008400000042000000210000001080020000100108000000840000004200000021000000108008000040040000200200001001080000008400000042000000210f86d65bc114ce3eb104da5642a25653cdf94f28941f9f0bdcbdf3dc871195f751917400002c71780ab030d9dd54eec943f302ecbdf591de86bbf2a45008200048e36fe4ac9aa94830d9d93318b574bf9acd859c6a58ebf7772c061bc5ac646048200048e2802ef9cee3cd437badd99aecf09c072e7ef1da2ddd3e2a5c83f1080c0d1e8bdffe6ef0fea398eaf7ff7dff5da030210789061d4926c7acfa6f7ac0ff479aec7f39b7b4ffb8ca05bc6655ec6e540e368bdf3da7fceb80087636508e0b803704e7293e4baf7bc692d8f7ee3aed74def7b110725bf7d23cbdbde73dd7bdef79e4d92f689a06be3fbde8fbff7b6f75cfec6f7edf3b8cce3f5beee3d37e338108020008123308f287adb5a5eb596ef5b4b925cd69a3a42e8660f43e724dbebdbda88b81fe6393fb69637bde75def993f352e49def59e37bde7c7d6f2dd3ca725391b374bcc63b674dfc6e534db1b5b5a92abf17abf6a2d6f5bcbfb31430a0840e0d00330db99bf9f5acbb7f39cb35272556bce97d049b219a1b32f96e56c56c96d002ecf6f899df547c2ad677bca7889e26fe739ab24af5bbb0dc0654ce63d7aad973199c6b8bcebfdf6f9fd34660267ff498000040edf6684ce8fade56c9e3327f9a1949c8ebb43db88c0b647335d75676dbb9eed756e6f5acbf7f39c1fe639579f71ade33ac9d598393c4d72d37b1ed79a93f1ef388471b9e93daf7bcfb76376f46d6b7b15fa800004fe7f03702774fa88c18b3ba1b37cedc35da265ccd0d59dd0d9643bcbf94b6b7935cf79fd993380af5bcbc908bd5f7acfc598413b94715927b96e2d3f8f1f00aec6758f8000040edcbaf75c8debfe9653a5a723169618dab765504a7ebdd65f1bcff3baf75c8d1b3a3e7557ef7a5cffd7c7a9d1576331e8431b979b9d71b91a610c0840e0c0cdd9ce00ae5bcbdb6caf13bbbb23c4be2641d979fccb922eb7cb9e7ce2ef6eb29d1d5b9792b7c93fec94b1ef63b23b2ecb78ac5d03080210380ecb69ccdb991f3340b7e37293ed0c9971010e9185a001000420000002100000010800800004004000020020000100b857d601842356924ccbd7ce5eb12963c9e09df5efac84b7dfaff387fff1e1b55df6349ec722d0b3d7190420701c6f0067a5e4627c9ded6c7956f261bbb366a8f6def29a969dd774dd7bde8fede0aec7efd7860a042070e06f00a5e4b2943c9ba63cab354f4608ae4a49c9879d427aef6686f658495246d8d711809b117dafc71ed0659e3327f6030601081cc31bc0a35af3a2d6fc8f69cacb69cae352727a27006701b8f70138dd09c09bdef3a6f77c3fcfa923fcae67bb018300040eff0da0943c2a255fd69aff98a6fcc76a9567b5e662270037bd6713d786ed7b00aec6ebbd04e0f598f93b1df1f7a6b5fc548a7d8f410002876e4a72516b9e4d53be59adf29fab555ed69acb5a53b29df95b8f0894057b1e80a5e424db99c09ee4aab57cdf5ae6243ff79e6f5bcb640610042070046f00e3c68f27a5e445adf97a9af2cd34e5ac7cb86f7489c06e66687f037027fe16ef6b4d9de7fcd25a9e8ce360558ac10201081c7c182439c9f64ee0cb52f2b4d65fc55ff261799888838372365eefcbe5eeefdc592e063868168286237f0398c64d1fe72302391e97e3753f2de5f626114000024760caf654c0c908018ec7e958f771358e0340000247e036f7ccfe1cf787c0087ff90f02103826635b308e4f1baf3f20008163e9be110073b64bbdd805e2b8ac7bcf66ec03dc62ad471080c051683be1b7ec09cbf1b8ddff7784a05960381e96818123d6936c92bcef3d57633788cbdf580f6e6d21e8bd56b2bdc967d766bcde572302edf6020210381273efb77bc2be6a2ddfcd737ab6cb839452d2c69f8b83fd0fc055b677fdd652d247f07f3fcf79d55ade8cd77936030c02103882004c7235f684fd769e73524adef69ef39dbd80d7e31a3169b0df0138653b0bb8ec05fcaef7fc385ef79fc64ca08de04000024760d37bae5acb8ff39cb352b2e93d3feeec06b29c223633b4ffa6b1dedf7222f87def79dd5abe1bafff556bd9789d41000247108049def69e1f5a4bdb6cf2a6d65c8c6b004b76ee1216060711807504601ff17fdd7b7e6e2daf5acbdb71aa1f1080c0815b8f19c0643b23f4536b3959f6fe1d2c0f72184a7ebdecc33c5eff77e37ac0abd62c03040210380673b64b81ac5bcbdb6c6789a6fc7a47887ee757f633fef21bafeb9cedecee26b95d0f101080c0816bf970a3c7b60a641ec031b0103400800004004000020020000100108000000840000004200000f7ca3a8070c4ca78135816809e9294b10ddc2eab031ec66b7df735ed63f1e7dd05a1bdd6200081237803382f2517a5e4a2d69c97929324b5940fe1d7fb36160cd75ec75f49929db86fbd679de45defb96e2dd7e3f76bc305021038f037805272596b9e8dafa7b5e6a294db37869e0fbb85b0dfeaf85a027093ed3680bfb4969f4a49692d1bfb018300048ee30de05129f9b2d67c334df96a9af2a4d69c264929e9e3b4a0003c8c005c657b8a3fbde726c9ebd6f2dd3c67ca763bc02bc3040210388237805272594a5ed49aff58adf23fa729cfc7a9e052caed7561f3380dcc7e2ad95ee7b95cefd97bcfbbdef3aab59c9492f598095c8d3804042070e06f0097b5e6d934e59b69ca5f57abbc9ca65c96929aedcd01ebdeb311807b1f80ab5272326ef66949ae7acfa379ce26c9cfade5b2b5ace6d9608100040edd544a4e4bc99352f2bcd67c3d42f0b47cb867b4b93bf43002301f6eee49929bde5347fc3d19c7c1548ac1020108ecbb4fddbd5b929c24391da7829fd4faabf8cb8886534379704ec7eb7d39e2ef24ffb854cc1f399680fd62216838c4e8db59df6df391ef6d3b6f042742eff82270bceef5cef1f05b36e3789ac7f125064100020f29fec607f99c64f3890bfa3777eef27502f0b8949df0db7ce6f1328fef3723080210786011d8b2bd73f75397f46f7abffdbe4def967b39326d27eae671b3cfc72cdfd7c41f0840e06147e0273fd0f3611b30bb401c977572bbcccf722c7cf478117f200081876bd9faab7ec65d9db7bb7d7cc60c108765d37bda1f88ba3ab69273a9000840e001c6df7253c7c927bef7742c0e5c774290e3b184dfb24bc8e9277e6038c9879b4644200840e001c5dff2417e514a1e8f653e7eefc3fcf1f8be650d381feac777bc2c6b415e9492c71ff9a1e1721c4fcbf1b21281b0d7ac030807f613ddc958d3ef8b5af3b2d6dc4c537e692d57e3868f5a4acec6e2cf2fa729cfa7298f6acdd9ce72201ccff172564a1ed59ae7d39497ada52779dd7bde8fd3c3d3389e9e8ee3e98bf143c589e3050420f0b03ed09fd49a97d394ebdeb32a256f5acbfb6c2fe22fe37b2e4bc997d394af6bcdb331b33319c2a33225b92825cf6acdd7b566bd5ae5b2945c8d00ecd9ce109e25793c768a79394d79e207061080c0030ac052723e3ed0bf99a694244f6acd756b59ef04e0c9f8bea7b5e6ab69ca8b31abb3b215d8717d008c1f045ed49af7ab5556634bc077bd67bd138027492e6abddd2ef059ad392fe5b36e32020420f0af0ec024e7e3f46f1fbfffb2b5bcdf59c0b7643bf3b37baaf859adb9acd50ce09199925cd69ae7e307834763f66f3d8e97e50691291f4e153f1ba781cfcd008200041ece07fa128027e3a2fe9b69fa87459eeb4e045e94928b31033899d139aee3a5945c26c934dd1e37eb9d1f16768f97d5d82a703956ce5d3200021078186a727b47ef45efd9d4fa9bebbcedae13388d378269dcd9c9917d008cd7fd729ab6e1374efdde3d5eea385e9663658a65244000020f4219d76b9d8c0f76f8e80f0c6356cfb1020210d8337decde51fec40ff1beb3234811070777acfcab8e17c70aecd10f8086000eefc37d1ffeb9383e000108fc93fe55b32f66751c1f8e0f383c4e01830f761fea8e15c70b1c19338000000210000001080080000400400002002000010010800000084000000420000002100000010800800004004000020020000100042000000210000001080080000400400002002000010010800000084000000420000002100000010800800004004000020020000100042000000210000001080080000400400002002000010010800000084000000420000002100000010800800004004000020008400000042000000210000001080080000400400002002000010010800000084000000420000002100000010800800004004000020008400000042000000210000001080080000400400002002000010010800000084000000420000002100000010800800004001080000008400000042000000210000001080080000400400002002000010010800000084000000420000002100000010800800004001080000008400000042000000210000001080080000400400002002000010010800000084000000420000002100000010800800004001080000008400000042000000210000001080080000400400002002000010010800000084000000420000002100000010800200001001080000008400000042000007be6ff01d27f27e11ad6f4110000000049454e44ae426082, 'lemari nyonya.png', 6856);

-- --------------------------------------------------------

--
-- Table structure for table `peraturan_input`
--

CREATE TABLE IF NOT EXISTS `peraturan_input` (
  `id` int(10) NOT NULL,
  `judul` char(50) NOT NULL,
  `isi` longtext NOT NULL,
  `tgl_posting_peraturan` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peraturan_input`
--

INSERT INTO `peraturan_input` (`id`, `judul`, `isi`, `tgl_posting_peraturan`) VALUES
(1, '', 'iwak peye', '2015-08-02'),
(2, 'goyang tubles', 'duo serigala', '2015-08-02'),
(3, 'rojo langit', 'inyek busuk', '2015-08-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita_upload`
--
ALTER TABLE `berita_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen_upload`
--
ALTER TABLE `dokumen_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peraturan_input`
--
ALTER TABLE `peraturan_input`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita_upload`
--
ALTER TABLE `berita_upload`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dokumen_upload`
--
ALTER TABLE `dokumen_upload`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `peraturan_input`
--
ALTER TABLE `peraturan_input`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
