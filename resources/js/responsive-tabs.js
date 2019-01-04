var fakewaffle = ( function ( $, fakewaffle ) {
	'use strict';

	var fontAwesomeIcon = '<i class="fa fa-plus d-lg-none"></i>';

	fakewaffle.responsiveTabs = function ( collapseDisplayed ) {

		fakewaffle.currentPosition = 'tabs';

		var tabGroups = $( '.nav-tabs.responsive' );
		var hidden    = '';
		var visible   = '';
        var activeTab = '';
        
		hidden = ' d-none d-lg-flex';
		visible = ' d-lg-none col-12';

		$.each( tabGroups, function ( index ) {
			var collapseDiv;
			var $tabGroup = $( this );
			var tabs      = $tabGroup.find( 'li a' );

			if ( $tabGroup.attr( 'id' ) === undefined ) {
				$tabGroup.attr( 'id', 'tabs-' + index );
			}

			collapseDiv = $( '<div></div>', {
				'class' : 'card-soup responsive' + visible,
				'id'    : 'collapse-' + $tabGroup.attr( 'id' )
			} );

			$.each( tabs, function (index) {
				var $this          = $( this );
				var oldLinkClass   = $this.attr( 'class' ) === undefined ? '' : $this.attr( 'class' );
				var newLinkClass   = 'accordion-toggle ' + (index == 0 ? '' : 'collapsed');
				var oldParentClass = $this.parent().attr( 'class' ) === undefined ? '' : $this.parent().attr( 'class' );
				var newParentClass = 'card';
				var newHash        = $this.get( 0 ).hash.replace( '#', 'collapse-' );

				if ( oldLinkClass.length > 0 ) {
					newLinkClass += ' ' + oldLinkClass;
				}

				if ( oldParentClass.length > 0 ) {
					oldParentClass = oldParentClass.replace( /\bactive\b/g, '' );
					newParentClass += ' ' + oldParentClass;
					newParentClass = newParentClass.replace( /\s{2,}/g, ' ' );
					newParentClass = newParentClass.replace( /^\s+|\s+$/g, '' );
				}

				if ( $this.parent().hasClass( 'active' ) ) {
					activeTab = '#' + newHash;
				}

				collapseDiv.append(
					$( '<div>' ).attr( 'class', newParentClass ).html(
						$( '<div>' ).attr( 'class', 'card-header' ).html(
							$( '<h4>' ).attr( 'class', 'card-title' ).html(
								$( '<a>', {
									'class'       : newLinkClass,
									'data-toggle' : 'collapse',
									'data-parent' : '#collapse-' + $tabGroup.attr( 'id' ),
									'href'        : '#' + newHash,
									'html'        : $this.html()
								} )
							)
						)
					).append(
						$( '<div>', {
							'id'    : newHash,
							'class' : 'collapse ' + (index == 0 ? 'show' : '')
						} )
					)
				);
			} );

			$tabGroup.next().after( collapseDiv );
			$tabGroup.addClass( hidden );
			$( '.tab-content.responsive' ).addClass( hidden );

			if ( activeTab ) {
				$( activeTab ).collapse( 'show' );
			}
		} );

		fakewaffle.checkResize();
		fakewaffle.bindTabToCollapse();
	};

	fakewaffle.checkResize = function () {

		if ( $( '.card-soup.responsive' ).is( ':visible' ) === true && fakewaffle.currentPosition === 'tabs' ) {
			fakewaffle.tabToPanel();
			fakewaffle.currentPosition = 'panel';
		} else if ( $( '.card-soup.responsive' ).is( ':visible' ) === false && fakewaffle.currentPosition === 'panel' ) {
			fakewaffle.panelToTab();
			fakewaffle.currentPosition = 'tabs';
		}

	};

	fakewaffle.tabToPanel = function () {

		var tabGroups = $( '.nav-tabs.responsive' );

		$.each( tabGroups, function ( index, tabGroup ) {

			// Find the tab
			var tabContents = $( tabGroup ).next( '.tab-content' ).find( '.tab-pane' );

			$.each(tabContents, function ( index, tabContent ) {
				// Find the id to move the element to
				var destinationId = $( tabContent ).attr( 'id' ).replace ( /^/, '#collapse-' );

				// Convert tab to panel and move to destination
				$(tabContent )
					.removeClass( 'tab-pane' )
					.addClass( 'card-body fw-previous-tab-pane' )
                    .appendTo( $( destinationId ) );
                    
                $(destinationId).closest('.card').find('.nav-link').append(fontAwesomeIcon);
			} );

		} );

	};

	fakewaffle.panelToTab = function () {

		var panelGroups = $( '.card-soup.responsive' );

		$.each( panelGroups, function ( index, panelGroup ) {
            // remove pluses
            $(panelGroup).find('.card-title').find('i.fa').remove();

            
            var destinationId = $( panelGroup ).attr( 'id' ).replace( 'collapse-', '#' );
			var destination   = $( destinationId ).next( '.tab-content' )[ 0 ];
            

			// Find the panel contents
			var panelContents = $( panelGroup ).find( '.card-body.fw-previous-tab-pane' );

			// Convert to tab and move to destination
			panelContents
				.removeClass( 'card-body fw-previous-tab-pane' )
				.addClass( 'tab-pane' )
				.appendTo( $( destination ) );

		} );

	};

	fakewaffle.bindTabToCollapse = function () {

		var tabs     = $( '.nav-tabs.responsive' ).find( 'li a' );
		var collapse = $( '.card-soup.responsive' ).find( '.card-collapse' );

		// Toggle the panels when the associated tab is toggled
		tabs.on( 'shown.bs.tab', function ( e ) {

			if (fakewaffle.currentPosition === 'tabs') {
				var $current  = $( e.currentTarget.hash.replace( /#/, '#collapse-' ) );
				$current.collapse( 'show' );

				if ( e.relatedTarget ) {
					var $previous = $( e.relatedTarget.hash.replace( /#/, '#collapse-' ) );
					$previous.collapse( 'hide' );
				}
			}

		} );

		// Toggle the tab when the associated panel is toggled
		collapse.on( 'shown.bs.collapse', function ( e ) {

			if (fakewaffle.currentPosition === 'panel') {
				// Activate current tabs
				var current = $( e.target ).context.id.replace( /collapse-/g, '#' );
				$( 'a[href="' + current + '"]' ).tab( 'show' );

				// Update the content with active
				var panelGroup = $( e.currentTarget ).closest( '.card-soup.responsive' );
				$( panelGroup ).find( '.card-body' ).removeClass( 'active' );
				$( e.currentTarget ).find( '.card-body' ).addClass( 'active' );
			}

		} );
	};

	$( window ).resize( function () {
		fakewaffle.checkResize();
	} );

	return fakewaffle;
}( window.jQuery, fakewaffle || { } ) );

fakewaffle.responsiveTabs();