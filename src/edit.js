import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import './editor.scss';

const Edit = () => {
	return (
		<p { ...useBlockProps() }>
			{ __( 'Wp Gp – hello from the editor!', 'wp-gp' ) }
		</p>
	);
};

export default Edit;
