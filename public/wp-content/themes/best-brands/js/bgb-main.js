//Main JS
//Written by @johnnytrinh
var bgbUtilities = (function() {

    function clickedOnContainer(evt, $target) {
        var objectOffset = $target.offset();


            return pointIsInBox(
                {
                    x: evt.pageX,
                    y: evt.pageY
                },
                {
                    bottom: objectOffset.top + $target.height(),
                    left: objectOffset.left,
                    right: objectOffset.left + $target.width(),
                    top: objectOffset.top
                }
            );

            function pointIsInBox(point, box) {
                return (point.x >= box.left) && (point.x <= box.right) && (point.y >= box.top) && (point.y <= box.bottom);
            }


    }

    function arrayify(value) {
        if(typeof value === typeof []) {
            return value;
        }

        return [value];
    }

    function getParmsFromURLHash(url) {
        var parms = {}, pieces, parts, i;
        var hash = url.lastIndexOf("#");
        if (hash !== -1) {
            // isolate just the hash value
            url = url.slice(hash + 1);
        }
        var question = url.indexOf("?");
        if (question !== -1) {
            url = url.slice(question + 1);
            pieces = url.split("&");
            for (i = 0; i < pieces.length; i++) {
                parts = pieces[i].split("=");
                if (parts.length < 2) {
                    parts.push("");
                }
                parms[decodeURIComponent(parts[0])] = decodeURIComponent(parts[1]);
            }
        }
        return parms;
    }

    function buildQueryFromObject(options) {
        var newHashArray = [];

        for(var option in options) {
            if(options.hasOwnProperty(option)) {

                if(typeof options[option] === typeof []) {
                    options[option] = options[option].join(',');
                }
                newHashArray.push( option + '=' + encodeURIComponent(options[option]) );
            }
        }

        return '?' + newHashArray.join('&');
    }

    function defaults(options, _defaults) {
        forOwn(_defaults, function(value, prop, obj) {
            options[prop] = isUndefined(options[prop]) ? value : options[prop];
        });

        return options;
    }

    function isUndefined(obj) {
        return typeof obj === typeof undefined;
    }

    function getParsedHash() {
        var hashParams = bgbUtilities.getParmsFromURLHash(window.location.href),
            currentDecodedParam;

        for (var prop in hashParams) {
            if(hashParams.hasOwnProperty(prop)) {

                currentDecodedParam = decodeURI(hashParams[prop]);

                if(currentDecodedParam.indexOf(",") > -1) {
                    hashParams[prop] = currentDecodedParam.split(',');
                }
            }
        }

        return hashParams;
    }

    function forOwn(obj, callback) {
        for (var prop in obj) {
            if(obj.hasOwnProperty(prop)) {
                callback(obj[prop], prop, obj);
            }
        }
    }

    return {
        arrayify: arrayify,
        buildQueryFromObject: buildQueryFromObject,
        clickedOnContainer: clickedOnContainer,
        defaults: defaults,
        getParsedHash: getParsedHash,
        getParmsFromURLHash: getParmsFromURLHash,
        isUndefined: isUndefined
    };

})();


var bgbShowOnEnter = (function() {

    return function() {
        var $window = $(window),
            $toCheckElem = $('[data-show-on-enter]');

        checkAndMakeVisible();

        $window.on('scroll.showOnScroll', function() {
            checkAndMakeVisible();
        });

        function isScrolledIntoView($elem, docViewBottom) {
            return ($elem.offset().top <= docViewBottom);
        }

        function checkAndMakeVisible() {
            var delay = 500,
                docViewBottom, $toShowElems, $currentElem, $toShow;

            if($toCheckElem.length) {

                docViewBottom = $window.scrollTop() + $window.height();
                $toShowElems = [];

                for(var i = $toCheckElem.length-1; i >= 0; i--) {
                    if(isScrolledIntoView( ($currentElem = $($toCheckElem[i])), docViewBottom )) {
                        $toCheckElem.splice(i, 1);
                        $toShowElems.unshift($currentElem);
                    }
                }

                if($toShowElems.length) {
                    for(var k = 0; k < $toShowElems.length; k++) {
                        (function(v) {
                            setTimeout(function() {
                                $toShowElems[v].addClass('visible');
                            }, delay * v);
                        })(k);
                    }
                }

            }
        }

    };

})();


var countUp = (function() {
    $('.count').each(function() {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text(),
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now).toLocaleString(document.documentElement.lang));
            }

        });

    });
})();



//var bgbNav = (function(bgbUtilities) {
//
//    var toggleClass = 'show',
//        $mainHeader, $mainNav, $navList, $window, $document;
//
//    function initTogglNav() {
//        var $navToggle = $mainNav.find('.nav-toggle');
//
//        $navToggle.on('click', function() {
//            if($mainNav.hasClass(toggleClass)) {
//                onClose();
//            } else {
//                onOpen();
//            }
//        });
//    }
//
//    function onOpen() {
//        $mainNav.addClass(toggleClass);
//        setTimeout(function() {
//            $document.on('click.navCloseClick', function(evt) {
//                if(!bgbUtilities.clickedOnContainer(evt, $navList)) {
//                    onClose();
//                }
//            });
//        }, 0);
//    }
//
//    function onClose() {
//        $mainNav.removeClass(toggleClass);
//        $document.off('click.navCloseClick');
//    }
//
//    function initMainNavResize() {
//        var headerHeight = $mainHeader.height(),
//            $window = $(window);
//
//        $window.on('resize', function() {
//            setNavHeight();
//        });
//
//        setNavHeight();
//
//        function setNavHeight() {
//            $navList.height($window.height() - headerHeight);
//        }
//    }
//
//    return function init() {
//        $mainHeader = $('#mainHeader');
//        $mainNav = $mainHeader.find('#mainNav');
//        $navList = $mainNav.find('.nav-list-wrapper');
//        $window = $(window);
//        $document = $(document);
//        initTogglNav();
//        initMainNavResize();
//    };
//
//})(bgbUtilities);

// NOTHING RETURNED - VARIABLE IS FOR STYLISTIC PREFERENCE
var bgbAddClassOnLoad = (function() {

    $(function() {
        $('[data-add-class-on-load]').each(function(key, val) {
            var $addClassElt = $(val);
            delay = $addClassElt.data('add-class-on-load-delay') || 0;

            setTimeout(function() {
                $addClassElt.addClass($addClassElt.data('add-class-on-load'));
            }, delay);

        });
    });

})();

var bgbValidation = (function() {

    return function() {
        var $button = $('[data-validate-form-on-click]');

        $button.on('click', function(evt) {
            var $this = $(this),
                $form = $('[name=' + $this.data('validate-form-on-click') + ']'),
                $fields = $form.find('[data-validate-not-empty]'),
                errorClass = 'error',
                isValid = true,
                $field;

            for(var i = 0; i < $fields.length; i++) {
                $field = $($fields[i]);
                if($field.val() === '') {
                    $field.addClass(errorClass);
                    isValid = false;
                } else {
                    $field.removeClass(errorClass);
                }
            }

            if(!isValid) {
                evt.preventDefault();
            }

        });

    };
})();

var bgbTwitterParser = (function() {

    return function() {
        var $tweets = $("[data-twitter-auto-link]");
        $tweets.each(function(index, elt) {
            var $elt = $(elt);
            $elt.html(twttr.txt.autoLink($elt.text()));
        });
    };

})();

var bgbVideoFitInFrame = (function() {
    return function() {
        $("body").fitVids();
    };
})();

$(function() {
    //bgbNav();
    bgbShowOnEnter();
    //bgbVideoFitInFrame();
});

var bgbExpandable = (function() {

    return function() {
        var $document = $(document);

        $('[data-expandable-toggle]').on('click', function() {
            var $this = $(this),
                targetSelector = $this.data('expandable-toggle'),
                $target = $(targetSelector),
                $targetArea = $this.data('expandable-close-on-click-outside') ? $($this.data('expandable-close-on-click-outside')) : $target,
                toggleClass = 'expanded';
            if($target.hasClass(toggleClass)) {
                onClose();
            } else {
                onOpen();
            }

            function onOpen() {
                $target.addClass(toggleClass);
                setTimeout(function() {
                    $document.on('click.expandableToggleCloseClick', function(evt) {
                        if(!bgbUtilities.clickedOnContainer(evt, $targetArea)) {
                            onClose();
                        }
                    });
                }, 0);
            }

            function onClose() {
                $target.removeClass(toggleClass);
                $document.off('click.expandableToggleCloseClick');
            }
        });
    };

})();




var bgbSelect = (function(bgbUtilities) {

    //////
    //	SELECTABLE CLASS
    /////
    function Selectable(groupName, callback) {

        var selectableInstance = this;

        groupName = groupName || '';

        selectableInstance.moduleSelector = '[data-selectable=' + groupName + ']';
        selectableInstance.$group = $(selectableInstance.moduleSelector);
        selectableInstance.itemSelector = selectableInstance.getGroupSelector(selectableInstance.$group) || '> li';
        selectableInstance.isRadio = selectableInstance.groupIsRadio(selectableInstance.$group);
        selectableInstance.$options = $(selectableInstance.$group.find(selectableInstance.itemSelector));

        selectableInstance.selectorClass = 'selected';
        selectableInstance.previousSelectedValues = [];
        selectableInstance.$previousSelectedOptions = [];

        $(selectableInstance.moduleSelector + ' ' + selectableInstance.itemSelector).on('click', function () {
            var $this = $(this),
                $options = selectableInstance.$options,
                $selectedOptions = [];
            selectedValues = [];

            if(selectableInstance.isRadio) {
                selectableInstance.clearAllSelected();
            }

            $this.toggleClass(selectableInstance.selectorClass);

            for(var i = 0, $option = $($options[i]); i < $options.length; i++, $option = $($options[i])) {
                if($option.hasClass(selectableInstance.selectorClass)) {
                    $selectedOptions.push($option);
                    selectedValues.push(selectableInstance.getOptionValue($option));
                }
            }

            if(typeof callback === typeof function() {}) {

                callback({
                    $target: $this,
                    $options: $options,
                    $selectedOptions: $selectedOptions,
                    $previousSelectedOptions: selectableInstance.$previousSelectedOptions,
                    selectedValues: selectedValues,
                    previousSelectedValues: selectableInstance.previousSelectedValues
                });

            }

            selectableInstance.previousSelectedValues = selectedValues;
            selectableInstance.$previousOptions = $options;
        });

    }

    Selectable.prototype = {

        clearAllSelected: function clearAllSelected() {
            this.$options.removeClass(this.selectorClass);
        },

        getSelected: function getSelected() {
            return $(this.$group.find(this.itemSelector + '.' + this.selectorClass));
        },

        findElementsByValues: function(values) {
            var queryString = '';
            values = bgbUtilities.arrayify(values);

            for(var i = 0; i < values.length; i++) {
                queryString += '[data-selectable-value="' + values[i] + '"]';
                if(i < values.length - 1) {
                    queryString += ', ';
                }
            }

            return $(this.$group.find(queryString));
        },

        selectOptions: function selectOptions(options, clearPrevious) {
            var $optionsToSelect = this.findElementsByValues(options);

            if(clearPrevious) {
                this.clearAllSelected();
            }

            $optionsToSelect.addClass(this.selectorClass);

            return this.getSelected();
        },

        deselectOptions: function deselectOptions(options) {
            var $optionsToSelect = findElementsByValues(options);
            $optionsToSelect.removeClass(this.selectorClass);
            return this.getSelected();
        },

        getOptionValue: function getOptionValue($option) {
            var hasValue = $option.attr('data-selectable-value');

            if(typeof hasValue !== typeof undefined) {
                return hasValue;
            } else {
                return $option.text().replace(/(\r\n|\n|\r)/gm,"");
            }
        },

        getGroupSelector: function getGroupSelector() {
            var $group = this.$group,
                selector;

            for(var i = 0; i < $group.length; i++) {
                selector = $($group[i]).attr('data-selectable-selector');
                if(typeof selector !== typeof undefined) {
                    return selector;
                }
            }

            return false;
        },

        groupIsRadio: function groupIsRadio() {
            var $group = this.$group,
                currentIsRadio;

            for(var i = 0; i < $group.length; i++) {
                currentIsRadio = $($group[i]).attr('data-selectable-radio');
                if(typeof currentIsRadio !== typeof undefined && !currentIsRadio) {
                    return true;
                }
            }

            return false;
        }
    };

    return function selectableFactory(groupName, callback, options) {
        return new Selectable(groupName, callback, options);
    };

})(bgbUtilities);


var bgbFilterList = (function(bgbSelect, bgbUtilities){

    return function() {

        var $isotopFilter = $('[data-brand-filtered="main"]').isotope({
                itemSelector: '.brand-item',
                getSortData: {
                    rank: function ($elem) {
                        return parseInt($($elem).data('rank'), 10);
                    },
                    previousRank: function ($elem) {
                        var rank = parseInt($($elem).data('previous-rank'), 10)
                        if(rank == 0) {
                            return 101;
                        } else {
                            return rank;
                        }
                    },
                    name: function($elem) {
                        return $($elem).data('brand-name').toString().toLowerCase();
                    },
                    country: '[data-country]',
                    region: '[data-region]',
                    sector: '[data-sector]',
                    brandValue: function ($elem) {
                        return parseInt($($elem).data('rank'), 10);
                    },
                    brandValueChange: function($elem) {
                        return parseInt($($elem).data('value-change'), 10);
                    }
                },
                sortBy: 'rank',
                sortAscending: true
            }),
            $items = $isotopFilter.find('.brand-item'),
            fadeInHasRun = false;

        var formatSelectable = bgbSelect('format', function(selections) {
            setListFormat(selections.selectedValues[0]);
            updateHash({
                listFormat: selections.selectedValues[0]
            });
        });

        var sortTypeSelectable = bgbSelect('sort-type', function(selections) {
            var sortAlpha = selections.$options[0].getAttribute('data-selectable-value');
            // var sortNumerical = selections.$options[1].getAttribute('data-selectable-value');

            var settings = {
                sortBy: selections.selectedValues[0] === sortAlpha ? 'name' : 'rank'
            };

            refactorIsotope(settings);
            updateHash(settings);
        });

        var sortDirectionSelectable = bgbSelect('sort-direction', function(selections) {
            var directionAscending = selections.$options[0].getAttribute('data-selectable-value');
            // var directionDescending = selections.$options[1].getAttribute('data-selectable-value');

            sortAscending = selections.selectedValues[0] === directionAscending;

            refactorIsotope({
                sortAscending: sortAscending
            });
            updateHash({
                sortAscending: sortAscending ? 'asc' : 'desc'
            });
        });

        var filterSelectable = bgbSelect('filter', function(selections) {
            refactorIsotope({
                filter: buildIsotopeFilterQueryString(selections.selectedValues)
            });
            updateHash({
                filter: selections.selectedValues
            });
        });

        var listSortSelectable = bgbSelect('list-sort', function(selections) {
            var $target = selections.$target,
                $options = selections.$options,
                selectedValue = selections.selectedValues[0],
                isotopeOptions = $isotopFilter.data('isotope').options,
                sortAscending = true;

            if(selections.selectedValues[0] === selections.previousSelectedValues[0]) {
                sortAscending = !isotopeOptions.sortAscending;
            } else {
                sortAscending = true;
            }

            $options.removeClass('asc desc');

            if(sortAscending) {
                $target.addClass('asc');
            } else {
                $target.addClass('desc');
            }

            refactorIsotope({
                sortBy: selectedValue,
                sortAscending: sortAscending
            });
            updateHash({
                sortBy: selectedValue,
                sortAscending: sortAscending
            });
        });


        // Color brand value changes + is green, - is red
        $('.brand-value-change').each(function(_index, element) {
            var $element = $(element);
            if( $element.text().indexOf("+") > -1) {
                $element.addClass('positive');
            } else {
                $element.addClass('negative');
            }
        });

        if(window.location.hash) {
            initFilters(bgbUtilities.getParsedHash());
        } else {
            initFilters({
                sortBy: 'rank',
                sortAscending: 'asc'
            });
            selectSortDirection(true);
        }

        function updateHash(options) {
            var newHash = bgbUtilities.defaults( options, bgbUtilities.getParsedHash());
            newHash = bgbUtilities.buildQueryFromObject(newHash);
            window.location.hash = newHash;
        }

        function initFilters(settings) {

            var isotopeOptions = {};

            if(!bgbUtilities.isUndefined(settings['filter']) && settings['filter'] !== '') {
                isotopeOptions['filter'] = buildIsotopeFilterQueryString(settings['filter']);
                selectFilters(settings['filter']);
            }

            if(!bgbUtilities.isUndefined(settings['sortBy']) && settings['sortBy'] !== '') {
                isotopeOptions['sortBy'] = settings['sortBy'];
            }

            if(!bgbUtilities.isUndefined(settings['sortAscending']) && settings['sortAscending'] !== '') {
                isotopeOptions['sortAscending'] = settings['sortAscending'] !== 'desc';
                selectSortDirection(isotopeOptions['sortAscending']);
            }

            if(!bgbUtilities.isUndefined(settings['listFormat']) && settings['listFormat'] !== '') {
                setListFormat(settings['listFormat']);
            }

            refactorIsotope(isotopeOptions);
        }

        function selectFilters(filters) {
            filterSelectable.selectOptions(filters);
        }

        function selectSortDirection(sortAscending) {
            direction = sortAscending ? 'Sort Ascending' : 'Sort Descending';
            sortDirectionSelectable.selectOptions(direction, true);
        }


        function setListFormat(format) {
            var gridClass = 'format-grid',
                listClass = 'format-list';

            if( format === 'ls') {
                $isotopFilter.removeClass(gridClass).addClass(listClass);
            } else {
                format = 'sq';
                $isotopFilter.removeClass(listClass).addClass(gridClass);
            }

            formatSelectable.selectOptions(format, true);

            refactorIsotope();
        }

        function hideAllItems() {
            $($items).css({ opacity: 0 });
        }

        function fadeInItems() {
            $($items).animate({ opacity: 1}, 2000);
        }

        function waterfallFadeInItems() {

            $items = shuffle($items);

            for(var i = 0; i < $items.length; i++) {
                $($items[i]).css({ opacity: 0 }).delay(i*10).animate({ opacity: 1});
            }
        }

        function shuffle(array) {
            var currentIndex = array.length, temporaryValue, randomIndex ;

            // While there remain elements to shuffle...
            while (0 !== currentIndex) {

                // Pick a remaining element...
                randomIndex = Math.floor(Math.random() * currentIndex);
                currentIndex -= 1;

                // And swap it with the current element.
                temporaryValue = array[currentIndex];
                array[currentIndex] = array[randomIndex];
                array[randomIndex] = temporaryValue;
            }

            return array;
        }

        function fadeInOnVisible() {

            hideAllItems();

            if(!tryToFadeIn()) {
                $(window).on('scroll', function() {
                    if(tryToFadeIn()) {
                        $(window).off('scroll');
                    }
                });
            }

            function tryToFadeIn() {
                if(gridIsVisible()) {
                    waterfallFadeInItems();
                    return true;
                }
            }

            function gridIsVisible() {
                var topPoint = $(window).scrollTop(),
                    bottomPoint = topPoint + $(window).height() - 80,
                    gridTop = $isotopFilter.offset().top,
                    gridBottom = gridTop + $isotopFilter.height();

                return gridTop < bottomPoint && gridBottom > topPoint;
            }
        }

        function refactorIsotope(options) {
            var isotopeData;

            $isotopFilter.isotope( 'once', 'layoutComplete', function() {
                if(!fadeInHasRun) {
                    fadeInHasRun = true;
                    fadeInOnVisible();
                }
            });

            $isotopFilter.isotope(options);
            $isotopFilter.isotope('layout');

            if(!$isotopFilter.data('isotope').filteredItems.length) {
                $('[data-brand-filtered-empty=main]').show();
                $isotopFilter.addClass('no-results');
            } else {
                $('[data-brand-filtered-empty=main]').hide();
                $isotopFilter.removeClass('no-results');
            }

        }

        function buildIsotopeFilterQueryString(filterValues) {
            var filterString = '';

            filterValues = bgbUtilities.arrayify(filterValues);

            if(filterValues.length > 0) {
                filterString += '[data-filter*="\\*';
                filterString += filterValues.join('\\*"], [data-filter*="\\*');
                filterString += '\\*"]';
            }

            return filterString;
        }
    };
})(bgbSelect, bgbUtilities);

var bgbContributors = (function(){
    return function() {
        var $isotopFilter = $('[data-report-contributors]').isotope({
                itemSelector: '[data-contributor-name]',
                getSortData: {
                    name: '[data-contributor-name]'
                },
                sortBy: 'random',
                sortAscending: true
            }),
            $sortSelector = $('.a-z-sort-button'),
            selectedClass = 'selected',
            $items = $isotopFilter.find('[data-contributor-name]'),
            fadeInHasRun = false;

        $isotopFilter.isotope( 'once', 'layoutComplete', function() {
            if(!fadeInHasRun) {
                fadeInHasRun = true;
                fadeInOnVisible();
            }
        });

        $isotopFilter.isotope('layout');

        $sortSelector.on('click', function() {
            var $this = $(this);

            if($this.hasClass(selectedClass)) {
                $this.removeClass(selectedClass);
                $isotopFilter.isotope({ sortBy: 'random'});
            } else {
                $this.addClass(selectedClass);
                $isotopFilter.isotope({ sortBy: 'name'});
            }
        });

        function fadeInOnVisible() {

            hideAllItems();

            if(!tryToFadeIn()) {
                $(window).on('scroll', function() {
                    if(tryToFadeIn()) {
                        $(window).off('scroll');
                    }
                });
            }

            function tryToFadeIn() {
                if(gridIsVisible()) {
                    waterfallFadeInItems();
                    return true;
                }
            }

            function gridIsVisible() {
                var topPoint = $(window).scrollTop(),
                    bottomPoint = topPoint + $(window).height() - 80,
                    gridTop = $isotopFilter.offset().top,
                    gridBottom = gridTop + $isotopFilter.height();

                return gridTop < bottomPoint && gridBottom > topPoint;
            }
        }

        function hideAllItems() {
            $($items).css({ opacity: 0 });
        }

        function fadeInItems() {
            $($items).animate({ opacity: 1}, 2000);
        }

        function waterfallFadeInItems() {

            $items = shuffle($items);

            for(var i = 0; i < $items.length; i++) {
                $($items[i]).css({ opacity: 0 }).delay(i*10).animate({ opacity: 1});
            }
        }

        function shuffle(array) {
            var currentIndex = array.length, temporaryValue, randomIndex ;

            // While there remain elements to shuffle...
            while (0 !== currentIndex) {

                // Pick a remaining element...
                randomIndex = Math.floor(Math.random() * currentIndex);
                currentIndex -= 1;

                // And swap it with the current element.
                temporaryValue = array[currentIndex];
                array[currentIndex] = array[randomIndex];
                array[randomIndex] = temporaryValue;
            }

            return array;
        }
    }
})();
/*
 $(function() {
 bgbExpandable();
 bgbFilterList();
 });
 */
