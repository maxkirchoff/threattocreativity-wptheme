<?php
//COLOR SCHEME IDENITFIER
			$crayola = array(0 => '#EFDECD', '#CD9575', '#FDD9B5', '#78DBE2', '#87A96B', '#FFA474', '#FAE7B5', '#9F8170', '#FD7C6E', '#000000', '#ACE5EE', '#1F75FE', '#A2A2D0', '#6699CC', '#0D98BA', '#7366BD', '#DE5D83', '#CB4154', '#B4674D', '#FF7F49', '#EA7E5D', '#B0B7C6', '#FFFF99', '#1CD3A2', '#FFAACC', '#DD4492', '#1DACD6', '#BC5D58', '#DD9475', '#9ACEEB', '#FFBCD9', '#FDDB6D', '#2B6CC4', '#EFCDB8', '#6E5160', '#CEFF1D', '#71BC78', '#6DAE81', '#C364C5', '#CC6666', '#E7C697', '#FCD975', '#A8E4A0', '#95918C', '#1CAC78', '#1164B4', '#F0E891', '#FF1DCE', '#B2EC5D', '#5D76CB', '#CA3767', '#3BB08F', '#FEFE22', '#FCB4D5', '#FFF44F', '#FFBD88', '#F664AF', '#AAF0D1', '#CD4A4C', '#EDD19C', '#979AAA', '#FF8243', '#C8385A', '#EF98AA', '#FDBCB4', '#1A4876', '#30BA8F', '#C54B8C', '#1974D2', '#FFA343', '#BAB86C', '#FF7538', '#FF2B2B', '#F8D568', '#E6A8D7', '#414A4C', '#FF6E4A', '#1CA9C9', '#FFCFAB', '#C5D0E6', '#FDDDE6', '#158078', '#FC74FD', '#F78FA7', '#8E4585', '#7442C8', '#9D81BA', '#FE4EDA', '#FF496C', '#D68A59', '#714B23', '#FF48D0', '#E3256B', '#EE204D', '#FF5349', '#C0448F', '#1FCECB', '#7851A9', '#FF9BAA', '#FC2847', '#76FF7A', '#9FE2BF', '#A5694F', '#8A795D', '#45CEA2', '#FB7EFD', '#CDC5C2', '#80DAEB', '#ECEABE', '#FFCF48', '#FD5E53', '#FAA76C', '#18A7B5', '#EBC7DF', '#FC89AC', '#DBD7D2', '#17806D', '#DEAA88', '#77DDE7', '#FFFF66', '#926EAE', '#324AB2', '#F75394', '#FFA089', '#8F509D', '#FFFFFF', '#A2ADD0', '#FF43A4', '#FC6C85', '#CDA4DE', '#FCE883', '#C5E384', '#FFAE42');
			$reds = array(0 => '#8B8989', '#CDC9C9', '#EEE9E9', '#8B6969', '#856363', '#6F4242', '#BC8F8F', '#CD9B9B', '#8B3A3A', '#C67171', '#802A2A', '#CD5C5C', '#CD5555', '#A52A2A', '#8B2323', '#8E2323', '#A62A2A', '#CC3232', '#CD3333', '#EEB4B4', '#8B1A1A', '#B22222', '#CD2626', '#DB2929', '#8C1717', '#F08080', '#EE6363', '#EE3B3B', '#EE2C2C', '#330000', '#660000', '#800000', '#8B0000', '#CD0000', '#EE0000', '#FF0000', '#FF3030', '#FF3333', '#FF4040', '#FF6666', '#FF6A6A', '#FFC1C1', '#FFCCCC', '#FFFAFA', '#D44942', '#E3170D', '#CDB7B5', '#AF4035', '#ECC3BF', '#CC1100', '#EED5D2', '#FA8072', '#FFE4E1', '#8B7D7B', '#FF2400', '#8A3324', '#CD4F39', '#EE5C42', '#FF5333', '#FF6347', '#8B3E2F', '#8B3626', '#CD5B45', '#EE6A50', '#FF7256', '#D43D1A', '#FF3300', '#FF3D0D', '#8B4C39', '#CD7054', '#C73F17', '#EE8262', '#FF8C69', '#A78D84', '#E9967A', '#FF5721', '#5E2612', '#8B2500', '#CD3700', '#EE4000', '#FF4500', '#FF7F50', '#8B5742', '#CD8162', '#EE9572', '#B13E0F', '#691F01', '#FFA07A', '#5C4033', '#D19275', '#A0522D', '#CD6839', '#8A360F', '#EE7942', '#FF7D40', '#FF8247', '#8B4726', '#DB9370', '#87421F', '#993300', '#292421', '#97694F', '#5E2605', '#FBA16C', '#FF6103', '#964514', '#E47833', '#FF7722', '#6B4226', '#5C3317', '#733D1A', '#FF6600', '#FF9955', '#A68064', '#855E42', '#E9C2A6', '#CD661D', '#D2691E', '#8B4513', '#EE7621', '#FF7F24', '#FFF5EE', '#CDC5BF', '#EEE5DE', '#603311', '#E3701A', '#C76114', '#8B8682', '#EE8833', '#FEE8D6', '#B6AFA9', '#8B7765', '#CDAF95', '#EECBAD', '#F4A460', '#FFDAB9', '#8B5A2B', '#B87333', '#EE9A49', '#AA5303', '#FFA54F', '#E7C6A5', '#CD853F', '#CC7F32', '#CD7F32', '#FAF0E6', '#CC7722', '#8B4500', '#CD6600', '#EE7600', '#FF8000', '#FF7F00', '#FFCC99', '#C77826', '#E3A869', '#E38217', '#7B3F00', '#CDB79E', '#EBC79E', '#EDC393', '#DD7500', '#FF8600', '#CDC0B0', '#8B7355', '#EED5B7', '#ED9121', '#FF8C00', '#FFE4C4');
			$greens = array(0 => '#5A6351', '#636F57', '#526F35', '#3B5323', '#78AB46', '#4A7023', '#458B00', '#66CD00', '#76EE00', '#7CFC00', '#7FFF00', '#7F9A65', '#8BA870', '#3D5229', '#629632', '#659D32', '#324F17', '#7F8778', '#586949', '#608341', '#BCED91', '#488214', '#46523C', '#6A8455', '#CFDBC5', '#397D02', '#748269', '#83F52C', '#567E3A', '#9DB68C', '#C0D9AF', '#A6D785', '#61B329', '#77896C', '#687E5A', '#3F602B', '#8AA37B', '#8FA880', '#646F5E', '#476A34', '#5DFC0A', '#435D36', '#93DB70', '#3B5E2B', '#84BE6A', '#4CBB17', '#484D46', '#3A6629', '#49E20E', '#308014', '#9CA998', '#55AE3A', '#7BBF6A', '#4DBD33', '#C5E3BF', '#596C56', '#A9C9A4', '#86C67C', '#7BCC70', '#8CDD81', '#699864', '#3D8B37', '#5F755E', '#B7C8B6', '#63AB62', '#4AC948', '#838B83', '#C1CDC1', '#698B69', '#2F4F2F', '#426F42', '#548B54', '#8FBC8F', '#E0EEE0', '#9BCD9B', '#71C671', '#7CCD7C', '#215E21', '#228B22', '#32CD32', '#B4EEB4', '#90EE90');
			$blues = array(0 => '#838B8B', '#7A8B8B', '#C1CDCD', '#668B8B', '#B4CDCD', '#2F4F4F', '#2F4F4F', '#5F9F9F', '#C0D9D9', '#528B8B', '#E0EEEE', '#96CDCD', '#388E8E', '#79CDCD', '#D1EEEE', '#8FD8D8', '#66CCCC', '#ADEAEA', '#70DBDB', '#AFEEEE', '#AEEEEE', '#8DEEEE', '#37FDFC', '#008080', '#008B8B', '#00CDCD', '#00EEEE', '#00FFFF', '#00FFFF', '#97FFFF', '#BBFFFF', '#E0FFFF', '#F0FFFF', '#00CED1', '#5F9EA0', '#00868B', '#00C5CD', '#00E5EE', '#00F5FF', '#67E6EC', '#4A777A', '#05EDFF', '#53868B', '#73B1B7', '#05E9FF', '#7AC5CD', '#8EE5EE', '#05B8CC', '#98F5FF', '#B0E0E6', '#C1F0F6', '#39B7CD', '#65909A', '#0EBFE9', '#C3E4ED', '#68838B', '#63D1F4', '#9AC0CD', '#50A6C2', '#ADD8E6', '#B2DFEE', '#00688B', '#009ACD', '#0099CC', '#00B2EE', '#00BFFF', '#BFEFFF', '#33A1C9', '#507786', '#87CEEB', '#38B0DE', '#0BB5FF', '#42C0FB', '#6996AD', '#539DC2', '#236B8E', '#3299CC', '#0198E1', '#33A1DE', '#607B8B', '#35586C', '#5D92B1', '#8DB6CD', '#325C74', '#A4D3EE', '#82CFFD', '#67C8FF', '#B0E2FF', '#87CEFA', '#6CA6CD', '#4A708B', '#9BC4E2', '#7EC0EE', '#87CEFF', '#517693', '#5D7B93', '#42647F', '#4682B4', '#4F94CD', '#5CACEE', '#63B8FF', '#525C65', '#36648B', '#62B1F6', '#74BBFB', '#F0F8FF', '#4E78A0', '#708090', '#708090', '#778899', '#778899', '#6183A6', '#9FB6CD', '#7D9EC0', '#104E8B', '#1874CD', '#1C86EE', '#60AFFE', '#007FFF', '#1E90FF', '#6C7B8B', '#B7C3D0', '#739AC5', '#75A1D0', '#B9D3EE', '#499DF5', '#C6E2FF', '#3B6AA0', '#7AA9DD', '#0276FD', '#003F87', '#6E7B8B', '#506987', '#A2B5CD', '#4372AA', '#26466D', '#1D7CF2', '#687C97', '#344152', '#50729F', '#4973AB', '#B0C4DE', '#3063A5', '#BCD2EE', '#7EB6FF', '#CAE1FF', '#4D71A3', '#2B4F81', '#4981CE', '#88ACE0', '#5993E5', '#3A66A7', '#3579DC', '#5190ED', '#42526C', '#4D6FAC', '#2C5197', '#6495ED', '#6D9BF1', '#5B90F6', '#1464F4', '#3A5894', '#7093DB', '#1B3F8B', '#0147FA', '#3D59AB', '#27408B', '#3A5FCD', '#4169E1', '#436EEE', '#003EFF', '#4876FF', '#A9ACB6', '#22316C', '#3B4990', '#283A90', '#6F7285', '#838EDE', '#E6E8FA', '#7D7F94', '#2E37FE', '#2F2F4F', '#42426F', '#8F8FBC', '#5959AB', '#7171C6', '#D9D9F3', '#23238E', '#3232CC', '#3232CD', '#191970', '#E6E6FA', '#000033', '#000080', '#00008B', '#00009C', '#0000CD', '#0000EE', '#0000FF', '#3333FF', '#4D4DFF', '#6666FF', '#AAAAFF', '#CCCCFF', '#F8F8FF', '#5B59BA', '#120A8F', '#302B54', '#483D8B', '#473C8B', '#3B3178', '#6A5ACD', '#6959CD', '#7A67EE', '#8470FF', '#836FFF', '#7B68EE', '#3300FF', '#5D478B', '#9F79EE', '#8968CD', '#9370DB', '#AB82FF', '#6600FF', '#380474');
			$purples = array(0 => '#2E0854', '#7F00FF', '#551A8B', '#7D26CD', '#8A2BE2', '#912CEE', '#9B30FF', '#71637D', '#694489', '#4B0082', '#BF5FFF', '#A020F0', '#72587F', '#6B238E', '#68228B', '#9932CC', '#9A32CD', '#9932CD', '#B23AEE', '#660198', '#AA00FF', '#BF3EFF', '#820BBB', '#9400D3', '#FDF8FF', '#5C246E', '#7A378B', '#B452CD', '#BA55D3', '#D15FEE', '#CC00FF', '#E066FF', '#816687', '#8F5E99', '#91219E', '#754C78', '#A74CAB', '#8B7B8B', '#8B668B', '#CDB5CD', '#D8BFD8', '#4F2F4F', '#9F5F9F', '#CC99CC', '#CD96CD', '#8E388E', '#EED2EE', '#DDA0DD', '#ECC8EC', '#EAADEA', '#DB70DB', '#EEAEEE', '#EE82EE', '#800080', '#8B008B', '#990099', '#CD00CD', '#EE00EE', '#FF00FF', '#FF00FF', '#FFBBFF', '#FFE1FF', '#8B4789', '#CD69C9', '#DA70D6', '#FF83FA', '#EE7AE9', '#9C6B98', '#871F78', '#D3BECF', '#B272A6', '#584E56', '#FF00CC', '#683A5E', '#B5509C', '#8E236B', '#CC3299', '#B62084', '#FF00AA', '#FF1CAE', '#8B1C62', '#CD2990', '#D02090', '#C71585', '#EE30A7', '#FF34B3', '#FF6EC7', '#F6A4D5', '#F7B3DA', '#543948', '#D4318C', '#8B0A50', '#CD1076', '#EE1289', '#FF1493', '#9D6B84', '#8B3A62', '#872657', '#DE85B1', '#551033', '#FF007F', '#FF69B4', '#FF6EB4', '#A46582', '#EE6AA7', '#B6316C', '#8B2252', '#CD3278', '#EE3A8C', '#FF3E96', '#CD6090', '#862A51', '#FF0066', '#8B8386', '#E0427F', '#FF92BB', '#A2627A', '#B03060', '#EEE0E5', '#CDC1C5', '#CD6889', '#DB7093', '#F6CCDA', '#FF82AB', '#FFF0F5', '#8B475D', '#EE799F', '#A5435C', '#8B636C', '#CD919E', '#EEA9B8', '#FFB5C5', '#DC143C', '#F54D70', '#FF0033', '#F6A8B6', '#DB2645', '#FFC0CB', '#E79EA9', '#EEA2AD', '#99182C', '#E31230', '#FFADB9', '#FFB6C1', '#8B5F65', '#CD8C95', '#DB9EA6', '#FFAEB9', '#CC4E5C', '#C82536', '#AF1E2D', '#E32636', '#F6C9CC', '#B0171F', '#EB5E66', '#D0A9AA', '#D41A1F', '#FF030D', '#551011', '#E32E30', '#E33638', '#9E0508', '#E35152');
			$blacks = array(0 => '#1C1C1C', '#1F1F1F', '#212121', '#242424', '#262626', '#292929', '#2B2B2B', '#2E2E2E', '#303030', '#333333', '#363636', '#383838', '#3B3B3B', '#3D3D3D', '#404040', '#424242', '#454545', '#474747', '#4A4A4A', '#4D4D4D', '#4F4F4F', '#525252', '#555555', '#575757', '#595959', '#5C5C5C', '#5E5E5E', '#616161', '#636363', '#666666', '#696969', '#696969', '#6B6B6B', '#6E6E6E', '#707070', '#737373', '#757575', '#787878', '#7A7A7A', '#7D7D7D', '#808080', '#7F7F7F', '#808080', '#828282', '#858585', '#878787', '#8A8A8A', '#8C8C8C', '#8F8F8F', '#919191', '#949494', '#969696', '#999999', '#9C9C9C', '#9E9E9E', '#A1A1A1', '#A3A3A3', '#A6A6A6');
			$websafes = array(0 => '#FFFFCC', '#FFFF99', '#FFFF66', '#FFFF33', '#FFFF00', '#FFCCFF', '#FFCCCC', '#FFCC99', '#FFCC66', '#FFCC33', '#FFCC00', '#FF99FF', '#FF99CC', '#FF9999', '#FF9966', '#FF9933', '#FF9900', '#FF66FF', '#FF66CC', '#FF6699', '#FF6666', '#FF6633', '#FF6600', '#FF33FF', '#FF33CC', '#FF3399', '#FF3366', '#FF3333', '#FF3300', '#FF00FF', '#FF00CC', '#FF0099', '#FF0066', '#FF0033', '#FF0000', '#CCFFFF', '#CCFFCC', '#CCFF99', '#CCFF66', '#CCFF33', '#CCFF00', '#CCCCFF', '#CCCCCC', '#CCCC99', '#CCCC66', '#CCCC33', '#CCCC00', '#CC99FF', '#CC99CC', '#CC9999', '#CC9966', '#CC9933', '#CC9900', '#CC66FF', '#CC66CC', '#CC6699', '#CC6666', '#CC6633', '#CC6600', '#CC33FF', '#CC33CC', '#CC3399', '#CC3366', '#CC3333', '#CC3300', '#CC00FF', '#CC00CC', '#CC0099', '#CC0066', '#CC0033', '#CC0000', '#99FFFF', '#99FFCC', '#99FF99', '#99FF66', '#99FF33', '#99FF00', '#99CCFF', '#99CCCC', '#99CC99', '#99CC66', '#99CC33', '#99CC00', '#9999FF', '#9999CC', '#999999', '#999966', '#999933', '#999900', '#9966FF', '#9966CC', '#996699', '#996666', '#996633', '#996600', '#9933FF', '#9933CC', '#993399', '#993366', '#993333', '#993300', '#9900FF', '#9900CC', '#990099', '#990066', '#990033', '#990000', '#66FFFF', '#66FFCC', '#66FF99', '#66FF66', '#66FF33', '#66FF00', '#66CCFF', '#66CCCC', '#66CC99', '#66CC66', '#66CC33', '#66CC00', '#6699FF', '#6699CC', '#669999', '#669966', '#669933', '#669900', '#6666FF', '#6666CC', '#666699', '#666666', '#666633', '#666600', '#6633FF', '#6633CC', '#663399', '#663366', '#663333', '#663300', '#6600FF', '#6600CC', '#660099', '#660066', '#660033', '#660000', '#33FFFF', '#33FFCC', '#33FF99', '#33FF66', '#33FF33', '#33FF00', '#33CCFF', '#33CCCC', '#33CC99', '#33CC66', '#33CC33', '#33CC00', '#3399FF', '#3399CC', '#339999', '#339966', '#339933', '#339900', '#3366FF', '#3366CC', '#336699', '#336666', '#336633', '#336600', '#3333FF', '#3333CC', '#333399', '#333366', '#333333', '#333300', '#3300FF', '#3300CC', '#330099', '#330066', '#330033', '#330000', '#00FFFF', '#00FFCC', '#00FF99', '#00FF66', '#00FF33', '#00FF00', '#00CCFF', '#00CCCC', '#00CC99', '#00CC66', '#00CC33', '#00CC00', '#0099FF', '#0099CC', '#009999', '#009966', '#009933', '#009900', '#0066FF', '#0066CC', '#006699', '#006666', '#006633', '#006600', '#0033FF', '#0033CC', '#003399', '#003366', '#003333');
			$traditional = array(0 => '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
?>