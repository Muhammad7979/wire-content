import './bootstrap';
import { livewire , Alphine } from '../../vendor/livewire/livewire/dist/livewire.esm.js';
import humanDate from '../../vendor/matildevoldsen/wire-comments/resources/js/directives/humanDate.js';
Alphine.directive('human-date', humanDate);

livewire.start();