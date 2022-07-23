import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

const Save = () => {
	return (
		<p { ...useBlockProps.save() }>
			{ __( 'Wp Gp – hello from the saved content!', 'wp-gp' ) }
		</p>
	);
};

export default Save;
