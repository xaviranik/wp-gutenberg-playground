import { registerBlockType } from "@wordpress/blocks";

registerBlockType("xvr/wp-gp", {
    edit: function () {
        return <p>Edit</p>;
    },
    save: function () {
        return <p>Save</p>;
    },
});
