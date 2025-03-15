<?php

namespace App\Http\Controllers;

use App\Models\GlcVotingNonVoting;
use Illuminate\Http\Request;

class GlcVotingNonVotingController extends Controller
{
    public function index()
    {
        $formattedRepresentatives = $this->getFormattedRepresentatives();
        $formattedCouncilPresidents = $this->getFormattedCouncilPresidents();
        $formattedOrganizationPresidents = $this->getFormattedOrganizationPresidents();
        $formattedEditorsInChief = $this->getFormattedEditorsInChief();
        $response = [
            'representatives' => $formattedRepresentatives,
            'council_presidents' => $formattedCouncilPresidents,
            'organization_presidents' => $formattedOrganizationPresidents,
            'editors_in_chief' => $formattedEditorsInChief,
        ];
        return response()->json($response);
    }

    private function getFormattedRepresentatives()
    {
        $representatives = GlcVotingNonVoting::where('type', 'VOTING MEMBERS | COLLEGE REPRESENTATIVES')
            ->get();

        $formattedRepresentatives = [];
        foreach ($representatives as $representative) {
            $college = $representative->college;
            $type = $representative->type;

            // Check if the college already exis ts in the formatted array
            $collegeIndex = array_search($college, array_column($formattedRepresentatives, 'college'));

            if ($collegeIndex === false) {
                // If the college doesn't exist, add it to the array
                $formattedRepresentatives[] = [
                    'college' => $college,
                    'type' => $type,
                    'members' => [
                        [
                            'name' => $representative->name,
                            'position' => 'Representative',
                            'college' => $college,
                        ],
                    ],
                ];
            } else {
                // If the college exists, add the member to the existing college
                $formattedRepresentatives[$collegeIndex]['members'][] = [
                    'name' => $representative->name,
                    'position' => 'Representative',
                    'college' => $college,
                ];
            }
        }

        return $formattedRepresentatives;
    }

    private function getFormattedCouncilPresidents()
    {
        $councilPresidents = GlcVotingNonVoting::where('type', 'VOTING MEMBERS | COLLEGE STUDENT COUNCIL PRESIDENTS')
            ->get();

        $formattedCouncilPresidents = [
            'type' => 'VOTING MEMBERS | COLLEGE STUDENT COUNCIL PRESIDENTS',
            'members' => [],
        ];

        foreach ($councilPresidents as $president) {
            $formattedCouncilPresidents['members'][] = [
                'name' => $president->name,
                'position' => 'President',
                'college' => $president->college,
            ];
        }

        return $formattedCouncilPresidents;
    }

    private function getFormattedOrganizationPresidents()
    {
        $organizationPresidents = GlcVotingNonVoting::where('type', 'VOTING MEMBERS | UNIVERSITY-BASED ORGANIZATION PRESIDENTS')
            ->get();

        $formattedOrganizationPresidents = [
            'type' => 'VOTING MEMBERS | UNIVERSITY-BASED ORGANIZATION PRESIDENTS',
            'members' => [],
        ];

        foreach ($organizationPresidents as $president) {
            $formattedOrganizationPresidents['members'][] = [
                'name' => $president->name,
                'organization' => $president->organization,
            ];
        }

        return $formattedOrganizationPresidents;
    }

    private function getFormattedEditorsInChief()
    {
        $editorsInChief = GlcVotingNonVoting::where('type', 'NON-VOTING MEMBERS | STUDENT PUBLICATION EDITORS-IN-CHIEF')
            ->get();

        $formattedEditorsInChief = [
            'type' => 'NON-VOTING MEMBERS | STUDENT PUBLICATIONS’ EDITORS-IN-CHIEF',
            'members' => [],
        ];

        foreach ($editorsInChief as $editor) {
            $formattedEditorsInChief['members'][] = [
                'name' => $editor->name,
                'publication' => $editor->publication,
                'college' => $editor->college,
            ];
        }

        return $formattedEditorsInChief;
    }
}
