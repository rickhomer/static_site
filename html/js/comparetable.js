/*--------------------------------------------------------------
		Compare editions page
	--------------------------------------------------------------*/
	
	$('#compare table tr').hover(function(){
				$(this).addClass('trOver');
			},
			function(){
				$(this).removeClass('trOver');
			});

			$('#compare table.compare tr:odd').addClass('odd');

			$('#compare table.compare tr').find('td.sectionHeader:eq(0)').css('background','#e1ecf7');

			//Student
			//$('#compare table.compare tr').find('td:eq(1):not(.sectionHeader)').addClass('student');
			//$('#compare table.compare tr').find('td.sectionHeader:eq(1)').css('background','#b2e74c').addClass('white');

			//Hiding Student results in changing the remaining 3's selectors. This is so I don't forget in case Student gets turned back on.
			//Basic: 2->1, Explorer: 3->2, Professional 4->3, Highlight border 3->2

			//Quickstart
			$('#compare table.compare tr').find('td:eq(1):not(.sectionHeader)').addClass('quickstart');
			$('#compare table.compare tr').find('td.sectionHeader:eq(1)').css('background','#f16a22').addClass('white');
			//Original color was 0f4778, then orange was f16a22

			//Explorer
			$('#compare table.compare tr').find('td:eq(2):not(.sectionHeader)').addClass('explorer');
			$('#compare table.compare tr').find('td.sectionHeader:eq(2)').css('background','#4b7d51').addClass('white');
			//Original color was 77bf00, green was 4b7d51

			//Professional
			$('#compare table.compare tr').find('td:eq(3):not(.sectionHeader)').addClass('professional');
			$('#compare table.compare tr').find('td.sectionHeader:eq(3)').css('background','#4468b0').addClass('white');
			//$('#compare table.compare tr').find('td:eq(3)').css({'border-left' : '2px solid #4468b0','border-right' : '2px solid #4468b06'});
			//$('#compare table.compare tr td:eq(3)').css({'border-top' : '2px solid #4468b0'});
			//Original color was 3381c6, blue was 4468b0

			$('#compare table.compare tr:last td').css({'background' : '#ffffff', 'border-bottom' : 'none'  })
			$('#compare table.compare tr:last td:eq(3)').css({'border-bottom' : '2px solid #4468b06', 'background' : '#b8d3eb'});
			
			//Enterprise
			$('#compare table.compare tr').find('td:eq(4):not(.sectionHeader)').addClass('enterprise');
			$('#compare table.compare tr').find('td.sectionHeader:eq(4)').css('background','#7F7F7F').addClass('white');
