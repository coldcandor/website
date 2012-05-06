CC.Minecraft = (function () {
	var
		/* Enchant level modifiers */
		level_mod = {
			armor: {
				leather: [0, 15],
				iron: [0, 9],
				chain: [0, 12],
				gold: [0, 25],
				diamond: [0, 10]
			},
			sword: {
				wood: [0, 15],
				stone: [0, 5],
				iron: [0, 14],
				gold: [0, 22],
				diamond: [0, 10]
			},
			tool: {
				wood: [0, 15],
				stone: [0, 5],
				iron: [0, 14],
				gold: [0, 22],
				diamond: [0, 10]
			},
			bow: [1, 1]
		},

		/* Enchant avaialbility ranges */
		range = {
			armor: {
				protection: {
					IV:  [49, 69],
					III: [33, 53],
					II:  [17, 37],
					I:   [1, 21]
				},
				fire_protection: {
					IV:  [34, 46],
					III: [26, 38],
					II:  [18, 30],
					I:   [10, 22]
				},
				feather_fall: {
					IV:  [23, 33],
					III: [17, 27],
					II:  [11, 21],
					I:   [5, 15]
				},
				blast_protection: {
					IV:  [29, 41],
					III: [21, 33],
					II:  [13, 25],
					I:   [5, 17]
				},
				projectile_protection: {
					IV:  [21, 36],
					III: [15, 30],
					II:  [9, 24],
					I:   [3, 18]
				},
				respiration: {
					III: [30, 60],
					II:  [20, 50],
					I:   [10, 40]
				},
				aqua_affinity: {
					I:   [1, 41]
				},
			},
			sword: {
				sharpness: {
					V:   [65, 85],
					IV:  [49, 69],
					III: [33, 53],
					II:  [17, 37],
					I:   [1, 21]
				},
				smite: {
					V:   [37, 57],
					IV:  [29, 49],
					III: [21, 41],
					II:  [13, 33],
					I:   [5, 25]
				},
				bane_of_arthropods: {
					V:   [37, 57],
					IV:  [29, 49],
					III: [19, 41],
					II:  [13, 33],
					I:   [5, 25]
				},
				knockback: {
					II:  [25, 75],
					I:   [5, 55]
				},
				fire_aspect: {
					II:  [30, 80],
					I:   [10, 60]
				},
				looting: {
					III: [44, 94],
					II:  [32, 82],
					I:   [20, 70]
				},
			},
			bow: {
				power: {
					V:   [41, 56],
					IV:  [31, 46],
					III: [21, 36],
					II:  [11, 26],
					I:   [1, 16]
				},
				punch: {
					II:  [32, 57],
					I:   [12, 37]
				},
				flame: {
					I:   [20, 50]
				},
				infinity: {
					I:   [20, 50]
				},
			},
			tool: {
				efficiency: {
					V:   [61, 111],
					IV:  [46, 96],
					III: [31, 81],
					II:  [16, 66],
					I:   [1, 51]
				},
				silk_touch: {
					I:   [25, 75]
				},
				unbreaking: {
					III: [25, 75],
					II:  [15, 65],
					I:   [5, 55]
				},
				fortune: {
					III: [44, 94],
					II:  [32, 82],
					I:   [20, 70]
				},
			}
		},

		/* Conflicting Enchants */
		restrictions = {
			armor: {
				protection: ['protection', 'fire_protection', 'blast_protection', 'projectile_protection'],
				fire_protection: ['protection', 'fire_protection', 'blast_protection', 'projectile_protection'],
				blast_protection: ['protection', 'fire_protection', 'blast_protection', 'projectile_protection'],
				projectile_protection: ['protection', 'fire_protection', 'blast_protection', 'projectile_protection'],
			},
			sword: {
				sharpness: ['sharpness', 'smite', 'bane_of_arthropods'],
				smite: ['sharpness', 'smite', 'bane_of_arthropods'],
				bane_of_arthropods: ['sharpness', 'smite', 'bane_of_arthropods'],
			},
			tool: {
				silk_touch: ['silk_touch', 'fortune'],
				fortune: ['silk_touch', 'fortune'],
			}
		},

		/* Enchant weights */
		weight = {
			armor: {
				protection: 10,
				fire_protection: 5,
				feather_fall: 5,
				blast_proection: 2,
				projectile_protection: 5,
				respiration: 2,
				aqua_affinity: 2
			},
			sword: {
				sharpness: 10,
				smite: 5,
				bane_of_arthropods: 5,
				knockback: 5,
				fire_aspect: 2,
				looting: 2
			},
			bow: {
				power: 10,
				punch: 2,
				flame: 2,
				infinity: 1
			},
			tool: {
				efficiency: 10,
				silk_touch: 1,
				unbreaking: 5,
				fortune: 2
			}
		},

		/* Validate input */
		validate = function (input) {
			// TODO: Add input validation
			return parseInt(input);
		};

	return {
		/* Inputs */
		level: null,
		type: null,
		material: null,

		/* Calulated values */
		mod: null,

		/* All possible enchants for given item */
		enchants: [],

		/* All enchants applied to the given item */
		applied: [],

		/**
		 * Start here!
		 */
		init: function () {
			this.bindEvents();
		},

		/**
		 * Event Bindings
		 */
		bindEvents: function () {
//			$('#minecraft').delegate('.inputs .calculate', 'click', $.proxy(this,'calculate_percentages'));
			$('#minecraft').delegate('.inputs .enchant', 'click', $.proxy(this,'enchant'));
			return this;
		},

//		/**
//		 * Calculate Enchant percentages based on a modified enchanting level
//		 */
//		calculate_percentages: function (e) {
//			var $inputs = $('#minecraft .inputs'),
//				level = validate($inputs.find('input.level').val()),
//				type = $inputs.find('select.type').val().toLowerCase(),
//				material = $inputs.find('select.type').val().toLowerCase();
//
//			try {
//
//			} catch (e) {
//				$('#minecraft .outputs').html('Error calculating!');
//			}
//
//			return false;
//		},

		/**
		 * Enchant an item based on the item given
		 */
		enchant: function (e) {
			var mod,
				applied = this.applied,
				count = 0,
				$inputs = $('#minecraft .inputs'),
				$outputs = $('#minecraft .outputs'),
				$out = $('<p class="applied_enchants">');

			this.level = validate($inputs.find('input.level').val());
			this.type = $inputs.find('select.type').val().toLowerCase();
			this.material = $inputs.find('select.material').val().toLowerCase();
			this.calc_mod_level()
				.find_valid_enchants();

			mod = this.mod;

			do {
				this.apply_enchant();
				mod = Math.floor(mod/2);
				count++;
			} while ((mod + 1) / 50 >= Math.random() && this.enchants.length);

				// Pretty output
				$.each(applied, function (i, enchant) {
					if (enchant) {
						applied[i] = enchant.join(' ');
					}
				});

				$outputs.append($out.html(applied.join('<br />')));

			// Clean up
			this.enchants = [];
			this.applied = [];

			return false;
		},

		/**
		 * Step 1: Calculate modified enchanting level
		 */
		calc_mod_level: function () {
			var enchantability, temp, temp2, temp3, mod,
				rand_int = function (n) { return Math.floor(Math.random() * (n)); },
				$outputs = $('#minecraft .outputs'),
				$out = $('<p class="mod_level">');

			try {
				enchantability = level_mod[this.type][this.material][1];
				temp = 1 + rand_int(enchantability/2 + 1) + rand_int(enchantability/2 + 1);
				temp2 = temp + this.level;
				temp3 = (Math.random() + Math.random() - 1) * .25;
				mod = Math.floor(temp2 * (1 + temp3) + .5);

				$outputs.append($out.html(mod));
				this.mod = mod;
				return this;
			} catch (e) {
				$outputs.append($('<p class="error">').html('Error in Enchanting Step 1! ' + e.toString()));
				this.mod = 0;
				return this;
			}
		},

		/**
		 * Step 2: Find possible enchants
		 */
		find_valid_enchants: function () {
			var enchants = [],
				enchants_string = [],
				mod = this.mod,
				$outputs = $('#minecraft .outputs'),
				$out = $('<p class="possible_enchants">');

			try {
				$.each(range[this.type], function (i, enchant) {
					$.each(enchant, function (j, power) {
						if (power[0] <= mod && power[1] >= mod) {
							enchants.push([i, j]);
							return false;
						}
					});
				});

				this.enchants = enchants;

				// Pretty output
				$.each(enchants, function (i, enchant) {
					enchants_string[i] = enchant.join(' ');
				});

				$outputs.append($out.html(enchants_string.join('<br />')));
				return this;
			} catch (e) {
				$outputs.append($('<p class="error">').html('Error in Enchanting Step 2! ' + e.toString()));
				this.enchants = [];
				return this;
			}
		},

		/**
		 * Step 3: Apply an enchant to the item
		 */
		apply_enchant: function () {
			var that = this,
				available = this.enchants,
				applied = this.applied,
				weights = [],
				restrict = restrictions[this.type],
				cont = true;

			try {
				// Remove conflicting enchants
				$.each(applied, function (i, applied_enchant) {
					$.each(restrict, function (j, restriction) {
						if (applied_enchant[0] === j) {
							available = $.grep(available, function (enchant, k) {
								return $.inArray(enchant[0], restriction) !== -1 ? false : true;
							});
						}
					});
				});

				// Find available enchant weights
				$.each(available, function (i, enchant) {
					var j, rand, chosen,
						temp = [],
						weight_val = weight[that.type][enchant[0]];
					for (j = 0; j < weight_val; j++) {
						temp[j] = i;
					}
					weights = weights.concat(temp);
				});

				// Pick a random enchant
				rand = Math.floor(Math.random() * (weights.length))
				chosen = weights[rand];
				applied.push(available[chosen]);

				// Prep for next loop
				available.splice(chosen, 1);
				this.enchants = available;

				return this;
			} catch (e) {
				$outputs.append($('<p class="error">').html('Error in Enchanting Step 3! ' + e.toString()));
				return this;
			}
		}
	}
}) ();






















