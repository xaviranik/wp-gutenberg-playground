var registerBlockType = wp.blocks.registerBlockType;

registerBlockType("xvr/wp-gp", {
  edit: function () {
    return "Edit";
  },
  save: function () {
    return "Save";
  },
});
