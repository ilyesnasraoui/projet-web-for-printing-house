/**
 * @module echarts/component/helper/RoamController
 */

define(function (require) {

    var Eventful = require('zrender/mixin/Eventful');
    var zrUtil = require('zrender/core/util');
    var eventTool = require('zrender/core/event');
    var interactionMutex = require('./interactionMutex');

    function mousedown(e) {
        if (e.target && e.target.draggable) {
            return;
        }

        var x = e.offsetX;
        var y = e.offsetY;
        var rect = this.rectProvider && this.rectProvider();
        if (rect && rect.contain(x, y)) {
            this._x = x;
            this._y = y;
            this._dragging = true;
        }
    }

    function mousemove(e) {
        if (!this._dragging) {
            return;
        }

        eventTool.stop(e.event);

        if (e.gestureEvent !== 'pinch') {

            if (interactionMutex.isTaken('globalPan', this._zr)) {
                return;
            }

            var x = e.offsetX;
            var y = e.offsetY;

            var dx = x - this._x;
            var dy = y - this._y;

            this._x = x;
            this._y = y;

            var target = this.target;

            if (target) {
                var pos = target.position;
                pos[0] += dx;
                pos[1] += dy;
                target.dirty();
            }

            eventTool.stop(e.event);
            this.trigger('pan', dx, dy);
        }
    }

    function mouseup(e) {
        this._dragging = false;
    }

    function mousewheel(e) {
        // Convenience:
        // Mac and VM Windows on Mac: scroll up: zoom out.
        // Windows: scroll up: zoom in.
        var zoomDelta = e.wheelDelta > 0 ? 1.1 : 1 / 1.1;
        zoom.call(this, e, zoomDelta, e.offsetX, e.offsetY);
    }

    function pinch(e) {
        if (interactionMutex.isTaken('globalPan', this._zr)) {
            return;
        }

        var zoomDelta = e.pinchScale > 1 ? 1.1 : 1 / 1.1;
        zoom.call(this, e, zoomDelta, e.pinchX, e.pinchY);
    }

    function zoom(e, zoomDelta, zoomX, zoomY) {
        var rect = this.rectProvider && this.rectProvider();

        if (rect && rect.contain(zoomX, zoomY)) {
            // When mouse is out of roamController rect,
            // default befavoius should be be disabled, otherwise
            // page sliding is disabled, contrary to expectation.
            eventTool.stop(e.event);

            var target = this.target;
            var zoomLimit = this.zoomLimit;

            if (target) {
                var pos = target.position;
                var scale = target.scale;

                var newZoom = this.zoom = this.zoom || 1;
                newZoom *= zoomDelta;
                if (zoomLimit) {
                    var zoomMin = zoomLimit.min || 0;
                    var zoomMax = zoomLimit.max || Infinity;
                    newZoom = Math.max(
                        Math.min(zoomMax, newZoom),
                        zoomMin
                    );
                }
                var zoomScale = newZoom / this.zoom;
                this.zoom = newZoom;
                // Keep the mouse center when scaling
                pos[0] -= (zoomX - pos[0]) * (zoomScale - 1);
                pos[1] -= (zoomY - pos[1]) * (zoomScale - 1);
                scale[0] *= zoomScale;
                scale[1] *= zoomScale;

                target.dirty();
            }

            this.trigger('zoom', zoomDelta, zoomX, zoomY);
        }
    }

    /**
     * @alias module:echarts/component/helper/RoamController
     * @constructor
     * @mixin {module:zrender/mixin/Eventful}
     *
     * @param {module:zrender/zrender~ZRender} zr
     * @param {module:zrender/Element} target
     * @param {Function} rectProvider
     */
    function RoamController(zr, target, rectProvider) {

        /**
         * @type {module:zrender/Element}
         */
        this.target = target;

        /**
         * @type {Function}
         */
        this.rectProvider = rectProvider;

        /**
         * { min: 1, max: 2 }
         * @type {Object}
         */
       ape({
                    x: range[0],
                    y: -width / 2,
                    width: range[1] - range[0],
                    height: width
                });
            }
        },

        rect: {

            create: createRectCover,

            getRanges: function () {
                var ends = getLocalTrackEnds.call(this);

                var min = [
                    mathMin(ends[1][0], ends[0][0]),
                    mathMin(ends[1][1], ends[0][1])
                ];
                var max = [
                    mathMax(ends[1][0], ends[0][0]),
                    mathMax(ends[1][1], ends[0][1])
                ];

                return [[
                    [min[0], max[0]], // x range
                    [min[1], max[1]] // y range
                ]];
            },

            update: function (ranges) {
                var range = ranges[0];
                this._cover.setShape({
                    x: range[0][0],
                    y: range[1][0],
                    width: range[0][1] - range[0][0],
                    height: range[1][1] - range[1][0]
                });
            }
        }
    };

    return SelectController;
});                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           